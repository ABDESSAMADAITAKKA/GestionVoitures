function toggle() {
    let vertical = document.getElementById("navvertical");
    let navline = document.getElementById("navline");
    let table = document.getElementById("table");
    let gestion = document.getElementById("gestion");
    let form = document.getElementById("form");
    let home = document.getElementById("home");

    vertical.style.transition = ".5s";
    home.style.transition = ".4s";
    navline.style.transition = ".4s";
    table.style.transition = ".4s";
    gestion.style.transition = ".4s";
    form.style.transition = ".4s";

    if (vertical.style.width === "200px") {
        vertical.style.width = "0";
        navline.style.marginLeft = "0px";
        form.style.marginLeft = "350px";
        navline.style.width = "1500px";
        gestion.style.marginLeft = "0px";
        home.style.left = "10px";
        table.style.marginLeft = "100px";
    } else {
        vertical.style.width = "200px";
        gestion.style.marginLeft = "200px";
        form.style.marginLeft = "500px";
        navline.style.marginLeft = "200px";
        home.style.left = "240px";
        table.style.marginLeft = "200px";
    }
}

$(document).ready(function() {
    $('#submitBtn').click(function(e) {
        e.preventDefault();
        var formData = new FormData($('#carForm')[0]);
        $.ajax({
            url: 'ajouter.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                let notifElement = document.getElementById("notif");
                let notifCount = parseFloat(notifElement.innerHTML) || 0; // Ensure a valid number
                notifCount += 1;
                notifElement.innerHTML = notifCount;
                $('#carForm')[0].reset();
                $('#successMessage').show();
            },
            error: function(xhr, status, error) {
                alert("Une erreur s'est produite: " + error);
            }
        });
    });
});
