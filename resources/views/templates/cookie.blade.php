<style>
  .wrapper {
    display: flex;
    position: fixed;
    bottom: 30px;
    left: 30px;
    max-width: 390px;
    background: #fff;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 1px 7px 14px -5px rgba(0, 0, 0, 0.15);
    flex-direction: column;
    z-index: 100;
  }

  .wrapper.hide {
    opacity: 0;
    pointer-events: none;
    transform: scale(0.8);
    transition: all 0.3s ease;
  }

  .content {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 10px;
  }

  .content p {
    color: #171717;
    font-family: "Plus Jakarta Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 21px;
    margin: 0;
  }

  .text {
    color: #171717;
    text-decoration: underline;
    height: 21px;
    align-self: stretch;
    width: 95px;
  }

  .content .buttons {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin-top: 10px;
    position: relative;
  }

  .buttons button {
    padding: 10px 20px;
    outline: none;
    font-size: 16px;
    font-weight: 500;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
  }

  .item-reject {
    color: #504D59;
    background: white;
    border: 2px solid #504D59;
  }

  .item-accept {
    color: #fff;
    background: #504D59;
    border: 2px solid #504D59;
  }

  .buttons button:hover {
    transform: scale(0.97);
  }

  .buttons .item {
    margin: 0;
    position: relative;
    z-index: 1;
  }

  .item-reject:hover {
    transform: translateY(50px);
  }

  .item-reject:hover ~ .item-accept {
    transform: translateY(-55px);
  }
</style>
<div class="wrapper">
  <div class="content">
    <p>This website uses cookies to ensure you get the best experience on our website.</p>
    <a href="https://www.w3schools.com/" class="text">Learn more</a>
    <div class="buttons">
      <button class="item item-reject">Reject All Cookies</button>
      <button class="item item-accept">Accept All Cookies</button>
    </div>
  </div>
</div>
<script>
  const cookieBox = document.querySelector(".wrapper"),
          acceptBtn = cookieBox.querySelector(".item-accept"),
          rejectBtn = cookieBox.querySelector(".item-reject");
  acceptBtn.onclick = () => {
    document.cookie = "Cookie=accepted; max-age=" + 60 * 60 * 24 * 30 +";SameSite=Lax";
    if (document.cookie.includes("Cookie=accepted")) {
      cookieBox.classList.add("hide");
    } else {
      alert("Cookie can't be set! Please unblock this site from the cookie settings of your browser.");
    }
  }
  let checkCookie = document.cookie.indexOf("Cookie=accepted");
  checkCookie !== -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  rejectBtn.onclick = () => {
    window.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
  }
</script>