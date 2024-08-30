function displayImage(input) {
    if (input.files && input.files[0]) {
        const reade = new FileReader();
        reade.onload = function (e) {
            const uploadedImage = document.getElementById('uploaded_image');
            uploadedImage.src = e.target.result;
            uploadedImage.classList.remove('default_image');
            uploadedImage.classList.add('uploaded_image');
        }
        reade.readAsDataURL(input.files[0]);
    }
  }