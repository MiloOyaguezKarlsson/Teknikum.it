<style media="screen">
#praktik {
  background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(left, #ffffff 0%, #ffffff 50%, #012e4d 50%, #012e4d 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, #ffffff 0%,#ffffff 50%,#012e4d 50%,#012e4d 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, #ffffff 0%,#ffffff 50%,#012e4d 50%,#012e4d 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#012e4d',GradientType=1 ); /* IE6-9 */
}

.container .part {
  padding: 40px;
}

.form-right {
  background-color: #012E4D;
}

.form-right p {
  color: white;
  margin:20px 0 40px 0;
}

.form-right input, #textarea {
  display: block;
  margin: 20px 0;
  padding: 10px 20px;
  width: 100%;
  border: none;
  transition: 0.3s ease;
}

input:focus, #textarea:focus {
  outline: none;
  background-color: #efefef;
}

.form-right button {
  background-color: #F4512E;
  padding: 10px 30px;
  border: none;
  color: white;
  transition: 0.3s ease;
  float: right;
}

.form-right button[type="submit"]:focus {
  outline: none;
  background-color: #F4512E;
  color: white;
}

@media (max-width: 768px) {
  #praktik {
    background: white;
  }
}
</style>

<section id="praktik">
  <div class="container">
    <div class="row">
      <div class="part col-md-6 col-sm-6">
        <h1>Lorem Ipsum</h1>
        <div class="divider"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="part form-right col-md-6 col-sm-6">
          <input type="text" name="" value="" placeholder="Namn*" required>
          <input type="text" name="" value="" placeholder="Företag*" required>
          <input type="email" name="" value="" placeholder="Email*" required>
          <input type="text" name="" value="" placeholder="Telefon*" required>
          <input type="text" name="" value="" placeholder="Antal praktikanter*" required>
          <input type="text" name="" value="" placeholder="Ämne*" required>
          <textarea id="textarea" name="name" rows="8" cols="80" placeholder="Meddelande*" required></textarea>
          <button type="submit" class="btn btn-default">Skicka</button>
        </form>
      </div>
    </div>
  </div>
</section>
