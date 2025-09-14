
// Disable Right Click
document.addEventListener('contextmenu', event => event.preventDefault());

// Disable F12, Ctrl+Shift+I, Ctrl+U, Ctrl+S, Ctrl+Shift+C
document.onkeydown = function (e) {
    if (
        e.keyCode == 123 || // F12
        (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) || // Ctrl+Shift+I
        (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) || // Ctrl+U
        (e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)) || // Ctrl+S
        (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) // Ctrl+Shift+C
    ) {
        return false;
    }
};

