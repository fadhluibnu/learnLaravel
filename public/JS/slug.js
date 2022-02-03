const title = document.querySelector("#title");
const slug = document.querySelector("#slug");

title.addEventListener("input", function () {
    var titleLower = title.value.toLowerCase();
    slug.value = titleLower.split(" ").join("-");
    validateSlug();
});

slug.addEventListener("input", function () {
    validateSlug();
});

function validateSlug() {
    const tangkapSlug = document.getElementById("slug");
    var request = new XMLHttpRequest();
    request.open(
        "GET",
        "/dashboard/posts/validateslug?slug=" + tangkapSlug.value,
        true
    );

    // const spiner_cek = document.getElementById("spinner-cek");
    const realtime_res = document.getElementById("relatime-response");
    realtime_res.innerHTML = "Mengecek...";
    request.onload = function () {
        if (this.status >= 200 && this.status < 400) {
            // Success!
            var resp = this.response;
            if (resp == "text-success") {
                realtime_res.classList.remove("text-danger");
                realtime_res.classList.add("text-success");
                realtime_res.innerHTML = "Slug tersedia";
            } else if (resp == "text-danger") {
                realtime_res.classList.remove("text-success");
                realtime_res.classList.add("text-danger");
                realtime_res.innerHTML = "Slug tidak tersedia";
            }
        } else {
        }
    };

    request.onerror = function () {
        // There was a connection error of some sort
    };

    request.send();
}

document.addEventListener("trix-file-accept", function () {
    e.preventDefault();
});
