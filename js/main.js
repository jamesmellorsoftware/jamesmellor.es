document.getElementsByClassName("close").onclick = closeWindow();

function highlightIcon() {
    // If user clicks an icon, highlight it like a Windows 95 icon
    // If they click it again after a second or two, de-highlight it
    // If the user double-clicks it, open the corresponding page if it's not already open (openWindow())
}

function openWindow() {
    // If user double-clicks
}

function closeWindow() {
    // If user clicks X, hide the window, i.e. set its display to zero
    this.style.display = "none";
}

function maximiseWindow() {
    // If the user clicks maximise, extend the window to fill the whole screen
    // If the window is already maximised, reduce it back to original size
    this.style.gridColumn = "1 / -1";
    this.style.gridRow = "1 / -1";
}

function minimiseWindow() {
    // If user clicks minimise, minimise the window to a small box in the bottom-left of the screen
    // with all controls on it plus a title, just like in Windows when there is no Start bar available
}