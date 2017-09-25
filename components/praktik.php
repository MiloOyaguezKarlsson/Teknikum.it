<style media="screen">
.half {
  position: absolute;
  background-color: #012E4D;
  height: 100%;
  right: 0;
}

.container .part {
  padding: 40px;
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
</style>

<section id="praktik">
  <div class="col-md-6 half">

  </div>
  <div class="container">
    <div class="row">
      <div class="part information-left col-md-6">
        <h1>Lorem Ipsum</h1>
        <div class="divider"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="part form-right col-md-6">
          <input type="text" name="" value="" placeholder="Namn*">
          <input type="text" name="" value="" placeholder="Företag*">
          <input type="text" name="" value="" placeholder="Email*">
          <input type="text" name="" value="" placeholder="Telefon*">
          <input type="text" name="" value="" placeholder="Antal praktikanter*">
          <input type="text" name="" value="" placeholder="Ämne*">
          <textarea id="textarea" name="name" rows="8" cols="80" placeholder="Meddelande*"></textarea>
          <button type="submit" class="btn btn-default">Skicka</button>
        </form>
      </div>
    </div>
  </div>
</section>
