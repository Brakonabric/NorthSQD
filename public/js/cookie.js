const cookieBox = document.querySelector(".wrapper"),
      acceptBtn = cookieBox.querySelector(".item-accept"),
      rejectBtn = cookieBox.querySelector(".item-reject");

acceptBtn.onclick = () => {
  document.cookie = "Cookie=accepted; max-age=" + 60 * 60 * 24 * 30;

  if (document.cookie.includes("Cookie=accepted")) {
    cookieBox.classList.add("hide");
  } else {
    alert("Cookie can't be set! Please unblock this site from the cookie settings of your browser.");
  }
}

rejectBtn.onclick = () => {
  window.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
}
