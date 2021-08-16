const inpFile = document.getElementById("inpFile");
const previewContainer = document.getElementById("imagePreview");
const previewImage = document.querySelector(".imagePreviewImage");
const previewDefaultText = document.querySelector(".imagePreviewDefaultText");
const cancelpreviewImage = document.querySelector(".cancelImagePreviewImage");

inpFile.addEventListener("change", function() {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        previewDefaultText.style.display = 'none';
        previewImage.style.display = "block";

        reader.addEventListener("load", function() {
            previewImage.setAttribute("src", this.result);
        });

        cancelpreviewImage.style.display = 'block';
        reader.readAsDataURL(file);
    } else {
        previewDefaultText.style.display = null;
        previewImage.style.display = null;
        previewImage.setAttribute('src', '');
    }
});

cancelpreviewImage.addEventListener("click", function() {
    previewDefaultText.style.display = null;
    previewImage.style.display = null;
    previewImage.setAttribute('src', '');
    cancelpreviewImage.style.display = 'none';
})