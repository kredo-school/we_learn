@extends('layouts.app')

@include('after_login_nav')



<div class="profile-holder">
    <figure class="snip1515">
        <div class="profile-image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample47.jpg" alt="sample47" /></div>
        <figcaption>
          <h3>Fleece Marigold</h3>
          <h4>Founder</h4>
          <p>Which is worse, that everyone has his price, or that the price is always so low.</p>
          <form>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="14"><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
              <option value="female">Female</option>
              <option value="male">Male</option>
              <option value="other">Other</option>
            </select><br>

            <label for="address">Address/Country:</label>
            <input type="text" id="address" name="address" value="Tokyo, Japan"><br>

            <label for="language">Language:</label>
            <input type="text" id="language" name="language" value="English"><br>

            <label for="about">About Me:</label><br>
            <textarea id="about" name="about" rows="4" cols="50">I'm a junior high school student.</textarea><br><br>

            <input type="submit" value="Submit">
          </form>
          <div class="icons">
            <a href="#"><i class="ion-social-reddit"></i></a>
            <a href="#"> <i class="ion-social-twitter"></i></a>
            <a href="#"> <i class="ion-social-vimeo"></i></a>
          </div>
        </figcaption>
      </figure>
