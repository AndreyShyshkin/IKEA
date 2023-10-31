document.addEventListener("DOMContentLoaded", function () {
  let images = document.querySelectorAll(".slider-container img");
  let thumbnails = document.querySelectorAll(".thumbnail-container img");
  let currentIndex = 0;
  let prevButton = document.querySelector(".prev-button");
  let nextButton = document.querySelector(".next-button");

  function showImage(index) {
    images.forEach((image, i) => {
      if (i === index) {
        image.style.display = "block";
        image.classList.add("selected");
      } else {
        image.style.display = "none";
        image.classList.remove("selected");
      }
    });
  }

  function selectThumbnail(index) {
    thumbnails.forEach((thumbnail, i) => {
      if (i === index) {
        thumbnail.classList.add("selected");
      } else {
        thumbnail.classList.remove("selected");
      }
    });
  }

  function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
    selectThumbnail(currentIndex);
  }

  function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
    selectThumbnail(currentIndex);
  }

  thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener("click", () => {
      currentIndex = index;
      showImage(currentIndex);
      selectThumbnail(currentIndex);
    });
  });

  prevButton.addEventListener("click", prevImage);
  nextButton.addEventListener("click", nextImage);

  showImage(currentIndex);
  selectThumbnail(currentIndex);

  setInterval(nextImage, 5000);
});
