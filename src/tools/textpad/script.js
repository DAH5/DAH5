// Add js-enabled class to body when JavaScript is available
document.body.classList.add('js-enabled');

document.addEventListener('DOMContentLoaded', () => {
    // Hide no-js message since JavaScript is enabled
    document.getElementById('nojs-message').classList.add('hidden');
    
    const editor = document.getElementById('editor');
    const newFileBtn = document.getElementById('newFile');
    const openFileBtn = document.getElementById('openFile');
    const saveFileBtn = document.getElementById('saveFile');
    const fileInput = document.getElementById('fileInput');
    const filenameDisplay = document.getElementById('filenameDisplay');
    
    // Store the current filename
    let currentFilename = 'document.txt';
    // Track if there are unsaved changes
    let hasUnsavedChanges = false;

    // Update filename display
    const updateFilenameDisplay = () => {
        const displayName = hasUnsavedChanges ? `${currentFilename} *` : currentFilename;
        filenameDisplay.textContent = displayName;
        // Update page title
        document.title = `${displayName} - Textpad`;
    };

    // Reset editor to default state
    const resetEditor = () => {
        editor.value = '';
        currentFilename = 'document.txt';
        hasUnsavedChanges = false;
        updateFilenameDisplay();
        editor.focus();
    };

    // Reset on page load
    resetEditor();

    // Track changes in the editor
    editor.addEventListener('input', () => {
        if (!hasUnsavedChanges) {
            hasUnsavedChanges = true;
            updateFilenameDisplay();
        }
    });

    // Confirm before leaving page with unsaved changes
    window.addEventListener('beforeunload', (e) => {
        if (hasUnsavedChanges) {
            e.preventDefault();
            e.returnValue = '';
            return '';
        }
    });

    // New file
    newFileBtn.addEventListener('click', () => {
        if (hasUnsavedChanges && !confirm('Are you sure you want to create a new file? Any unsaved changes will be lost.')) {
            return;
        }
        resetEditor();
    });

    // Open file
    openFileBtn.addEventListener('click', () => {
        if (hasUnsavedChanges && !confirm('Are you sure you want to open a new file? Any unsaved changes will be lost.')) {
            return;
        }
        fileInput.click();
    });

    fileInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = (e) => {
            editor.value = e.target.result;
            // Set the current filename to the loaded file's name
            currentFilename = file.name.replace(/\.txt$/, '') + '.txt';
            hasUnsavedChanges = false;
            updateFilenameDisplay();
            editor.focus();
        };
        reader.readAsText(file);
        
        // Reset file input
        fileInput.value = '';
    });

    // Save file
    saveFileBtn.addEventListener('click', () => {
        const text = editor.value;
        
        // Prompt for filename, using current filename as default
        let filename = prompt('Enter filename:', currentFilename);
        
        // If user cancels the prompt, return
        if (filename === null) return;
        
        // Remove any existing .txt extension
        filename = filename.replace(/\.txt$/, '');
        
        // Add .txt extension
        filename = `${filename}.txt`;
        
        // Update current filename
        currentFilename = filename;
        hasUnsavedChanges = false;
        updateFilenameDisplay();
        
        const blob = new Blob([text], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = filename;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    });

    // Handle keyboard shortcuts
    editor.addEventListener('keydown', (e) => {
        // Ctrl/Cmd + S to save
        if ((e.ctrlKey || e.metaKey) && e.key === 's') {
            e.preventDefault();
            saveFileBtn.click();
        }
        // Ctrl/Cmd + N for new file
        if ((e.ctrlKey || e.metaKey) && e.key === 'n') {
            e.preventDefault();
            newFileBtn.click();
        }
        // Ctrl/Cmd + O to open file
        if ((e.ctrlKey || e.metaKey) && e.key === 'o') {
            e.preventDefault();
            openFileBtn.click();
        }
    });
}); 