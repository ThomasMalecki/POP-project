(function() {
    let onpageLoad = localStorage.getItem("theme") || "";
    document.documentElement.setAttribute('data-theme', onpageLoad)
})();

function themeToggle() {
    let theme = localStorage.getItem("theme");
    console.log(theme)
    if (theme && theme === "dark") {
        trans()
        document.documentElement.setAttribute('data-theme', 'light')
        localStorage.setItem("theme", "light");
    } else {
        trans()
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem("theme", "dark");
    }

}
let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}

function myFunction() {
    var element = document.getElementById("test");
    element.classList.add("kanker");
}