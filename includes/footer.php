
 <!-- start footer -->
    <footer>
        <div class="main-footer">
          <div class="container block">
            <div class="footer-link">
              <div class="footer-contact" style="color:black">
                <h2>FIT FRENZY</h2>
                <a
                  href="https://goo.gl/maps/UtxCHBCpXpX9q57M6" target="_blank">
                  <i class="fa fa-map-marker" style="color:black"></i>
                  <span>NIT ANDHRA PRADESH, Tadepalligudem</span>
                </a>
                <a href="tel:9493791599">
                  <i class="fa fa-phone"></i>
                  <span>9493791599</span>
                </a>
                <a href="mailto:chilukuridilip99@gmail.com">
                  <i class="fa fa-envelope"></i>
                  <span>fitfrenzy@gmail.com</span>
                </a>
              </div>
  
              <div class="footer-products" style="color:black">
                <h2>Products</h2>
                <a href="category.php?category=Cloths" >sport wear</a>
                <a href="category.php?category=Gym">Gym Accessories</a>
                <a href="category.php?category=Shoes">Sport Shoes</a>
              </div>
  
              <div class="footer-further" style="color:black;">
                <h2>Further Info</h2>
                <a href="#">Home</a>
                <a href="aboutus.php" >About Us</a>
                <a href="#">Shop Locations</a>
                <a href="#">FAQs</a>
                <a href="contactus.php">Contact</a>
              </div>
            </div>
  
            <div class="footer-social" style="color:black;">
              <div class="footer-icon">
                <a href="https://www.facebook.com"
                  ><span><i class="fa fa-facebook"></i></span
                ></a>
                <a href=""
                  ><span><i class="fa fa-instagram"></i></span
                ></a>
                <a href=""
                  ><span><i class="fa fa-twitter"></i></span
                ></a>
                <a href="https://www.linkedin.com/in/dilip-chilukuri-654054253"
                  ><span><i class="fa fa-linkedin"></i></span
                ></a>
              </div>
              <div class="footer-email">
                <div>
                  <input type="email" placeholder="Email address" />
                  <span>Subscribe</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end footer -->

<style>
  .main-footer {
    background: #f6f1e9;
 
    color: var(--textColorLight);
    padding: 10rem 0;
    min-height: 50vh;
  }
  .main-footer a {
    text-decoration: none;
    color:black;
    width: max-content;
    transition: 0.3s;
  }
  .main-footer .footer-link a {
    padding: 0.3rem 0;
    width: max-content;
  }
  .footer-link a:hover {
    color: var(--colorSecondry);
  }
  .footer-contact,
  .footer-products,
  .footer-further {
    color:black;
    display: flex;
    flex-direction: column;
    margin-bottom: 3rem;
  }
  .footer-contact h2,
  .footer-products h2,
  .footer-further h2 {
    color:black;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid var(--borderDark);
  }
  .footer-contact h2 {
    color: black;
  }
  .footer-contact i {
    margin-right: 0.5rem;
  }
  .footer-contact > :nth-child(2):hover,
  .footer-contact a:hover i {
    color: var(--textColorLight);
  }
  .footer-social {
    border-top: 1px solid var(--borderDark);
  }
  .footer-social a{
    color:black;
  }
  .footer-icon {
    display: flex;
    margin-top: 2rem;
    font-size: 1.6rem;
  }
  .footer-icon a {
    width: 35px;
    height: 35px;
    border: 1px solid var(--borderDark);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 1rem;
    overflow: hidden;
  }
  .footer-email {
    margin-top: 2rem;
  }
  .footer-icon a:hover {
    background-color: var(--textColorLight);
  }
  .footer-icon a:hover i {
    color: var(--colorDark);
  }
  .footer-email > div {
    max-width: 350px;
    border: 1px solid var(--borderDark);
    display: flex;
    border-radius: 5px;
    overflow: hidden;
  }
  .footer-email > div * {
    padding: 1rem;
  }
  .footer-email input {
    flex: 1;
    background-color: var(--colorDark);
    color: var(--textColorLight);
    outline: none;
    border: 0;
  }
  .footer-email span {
    background-color: var(--colorPrimary);
    color: var(--textColorLight);
  }
  @media screen and (min-width: 768px) {
    .footer-link {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }
    .footer-link > div {
      width: 30%;
    }
    .footer-social {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }
  }

  </style>
  