function transform (file){
    const x = new XMLHttpRequest();
    x.onreadystatechange = function(){
        if(this.status === 200 && this.readyState === 4) {
            alert(this.responseText);
            if(this.responseText === "1"){
                window.location = "download.php?file=" + file;
            }
        }
    };
    x.open("GET", "check_file.php?file=" + file, true);
    x.send();
}