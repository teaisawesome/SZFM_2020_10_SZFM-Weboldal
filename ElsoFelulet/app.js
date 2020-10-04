// input anim
const labels = document.querySelectorAll('.regisztracio-form-control label');

labels.forEach(label => {
    label.innerHTML = label.innerText
        .split('').map((letter, idx) =>
            `<span style="transition-delay: ${idx * 50}ms">${letter}</span>`).join('');
});

//Regiszt Anim
const logo = document.querySelectorAll("#regisztracioAnimacio path");

for (let i = 0; i < logo.length; i++) {
    console.log(`Letter ${i} is ${logo[i].getTotalLength()}`);
}
//Regiszt anim vége

//Profil feltöltés
//4 hivatkozas a html elementekre -> 1 - inpFile 2 - div image preview 3 - img tag 4 - span tag

const inpFile = document.getElementById("inpFile");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".image-preview__image");
const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

//listener
inpFile.addEventListener("change", function() {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";

        reader.addEventListener("load", function() {
            previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
    } else {
        previewDefaultText.style.display = null;
        previewImage.style.display = null;
        previewImage.setAttribute("src", "");
    }
});

//Profil feltöltés vége