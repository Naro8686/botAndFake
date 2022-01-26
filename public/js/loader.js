var loaderTimeout;

function customLoader() {
    loaderTimeout = setTimeout(showPage, 500);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("app").style.display = "block";
}