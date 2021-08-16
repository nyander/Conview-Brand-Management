const sampleInpFile = document.getElementById("sampleInpFile");
const sampleContainer = document.getElementById("samplePreview");
const sampleImage = document.querySelector(".samplePreviewImage");
const sampleDefaultText = document.querySelector(".samplePreviewDefaultText");
const cancelSamplepreviewImage = document.querySelector(".cancelSamplePreviewImage");


sampleInpFile.addEventListener("change", function() {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        sampleDefaultText.style.display = 'none';
        sampleImage.style.display = "block";

        reader.addEventListener("load", function() {
            sampleImage.setAttribute("src", this.result);
        });

        cancelSamplepreviewImage.style.display = 'block';
        reader.readAsDataURL(file);
    } else {
        sampleDefaultText.style.display = null;
        sampleImage.style.display = null;
        sampleImage.setAttribute('src', '');
    }
});

cancelSamplepreviewImage.addEventListener("click", function() {
    sampleDefaultText.style.display = null;
    sampleImage.style.display = null;
    sampleImage.setAttribute('src', '');
    cancelSamplepreviewImage.style.display = 'none';
})