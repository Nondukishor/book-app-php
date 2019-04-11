var name;
function $(name) {
    document.getElementsByName(name);
    if (name.length>20){
        window.confirm('Title should not be more then 20')
    }
}

