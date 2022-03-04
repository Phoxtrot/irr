<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Form</title>
    <link id="custom" href="{{asset('frontend/css/form.css')}}" rel="stylesheet" />
    <link id="custom" href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180"  href="{{asset('frontend/favicon_io/apple-touch-icon.png')}}"/>
  <link rel="icon" type="image/png" sizes="32x32"  href="{{asset('frontend/favicon_io/favicon-32x32.png')}}"/>
  <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('frontend/favicon_io/favicon-16x16.png')}}"/>
  <link rel="manifest" href="{{asset('frontend/favicon_io/site.webmanifest')}}"/>
</head>
<body>
    <section class="form-section section">
      <div class="form-header">
        <img src="{{ asset('frontend/img/ibadulrahman-logo.png') }}" alt="ibadulrrahman logo" class="logo">
        <h1> IRInstitute E-Academy Application Portal</h1>
      </div>
      <h2>Select your application category from the dropdown below</h2>
      <div class="select-option">
        <h3>Options: </h3>
        <select onchange="changeOptions(this)" >
          <option value="" selected="selected" ></option>
          <option value="individual" >Individual Applicant</option>
          <option value="group" >Group/Family</option>
          <option value="student" > Student of a tertiary Institution</option>
        </select>
      </div>

          <form action="https://formsubmit.co/appform@irinstitute-ng.org"  method="post" class="className" name="individual" id="individual" style="display: none;" >
            <input type="hidden" name="_subject" value="Ibbadulrrahman E-Academy">
            <input type="hidden"  name="_template" value="table">
            <input type="hidden" name="_next" value="https://irinstitute-ng.org/success">
            <div class="step step-1 active">
              <h3 class="step-heading">APPLICANT DETAILS </h3>
              <div class="input-group">
                <input type="text" id="firstName" name="first-name" placeholder="First Name" required>
                <input type="text" id="lastName" name="last-name" placeholder="Last Name" required>
              </div>
              <input type="email" id="emailAddress" name="email" placeholder="Email" required>
              <div class="input-group">
              <input type="text" id="dateOfBirth" name="date-of-birth" placeholder="Date of Birth" onfocus="(this.type='date')" required>
              <input type="text" id="city" name="city" placeholder="City" required>
              </div>
              <input type="tel" id="phoneNumber" name="phone-number" placeholder="Phone" required>
              <input type="text" id="dateOfInterview" name="date-of-interview" placeholder="Select the date of interview" onfocus="(this.type='date')" required>
              <div class="radio">
                <p>Level of Education:</p>
                <div class="radio-container">
                 <div class="radio-group">
                  <input type="radio" id="beginner" name="qualification" value="Beginner" required>
                  <label for="beginner">just beginning</label>
                 </div>
                 <div class="radio-group">
                   <input type="radio" id="readRight" name="qualification" value="Read and write" required>
                   <label for="readRight"> I can read and write</label>
                 </div>
                 <div class="radio-group">
                  <input type="radio" id="idadi" name="qualification" value="Idadi" required>
                  <label for="idadi">Certificate of Idadi</label>
                 </div>
                  <div class="radio-group">
                    <input type="radio" id="thanawi" name="qualification" value="Thanawi" required>
                  <label for="thanawi">Certificate of Thanawi</label>
                  </div>
                  <div class="radio-group">
                    <input type="radio" id="others" name="qualification" value="others" required>
                  <label for="others">Others</label>
                  </div>
                </div>

              </div>
              <div class="btn-container">
                <button type="button" class="next-btn btn">Next</button>
              </div>
            </div>

            <div class="step step-2">
              <h3 class="step-heading">CONTACT PERSON’S DETAILS</h3>
                <input type="text" id="fname" name="contact-person-firstname" placeholder="First Name" required>
                <input type="text" id="lname" name="contact-person-lastname" placeholder="Last Name" required>

                <input type="tel" id="phone" name="phone-number" placeholder="Phone" required>
                <input type="text" id="relationship" name="relationship" placeholder="Relationship" required>
                <div class="button-group">
                  <button type="button" class="previous-btn btn">Prev</button>
                  <button type="button" class="next-btn btn">Next</button>
                </div>
            </div>

            <div class="step step-3">
              <h3 class="step-heading">Course</h3>
              <label for="course">Choose a course:</label>
              <select id="course" name="course">
                <option value="Quran">Quran</option>
                <option value="Shariah">Shariah</option>
                <option value="Arabic">Arabic</option>
                <option value="Combined">Combined</option>
              </select>
              <div class="button-group">
                <button type="button" class="previous-btn btn">Prev</button>
                <button type="submit" class="submit-btn btn">Submit</button>
              </div>
            </div>
          </form>
          <form action="https://formsubmit.co/appform@irinstitute-ng.org" method="post" class="className" name="group" id="group" style="display: none;">
            <input type="hidden" name="_subject" value="Ibbadulrrahman E-Academy">
            <input type="hidden"  name="_template" value="table">
            <input type="hidden" name="_next" value="https://irinstitute-ng.org/success.html">
            <div class="step step-1 active">
              <h3 class="step-heading">Group members representative details </h3>
              <div class="input-group">
                <input type="text" id="firstName" name="first-name" placeholder="First Name" required required>
                <input type="text" id="lastName" name="last-name" placeholder="Last Name" required required>
              </div>
              <input type="email" id="emailAddress" name="email" placeholder="Email" required required>
              <input type="number" id="groupNumber" name="No-of-group-member" placeholder="Number of group members" required required>
              <div class="input-group">
              <input type="text" id="dateOfBirth" name="date-of-birth" placeholder="Date of Birth" onfocus="(this.type='date')" required required>
              <input type="text" id="city" name="city" placeholder="City" required required>
              </div>
              <input type="tel" id="phoneNumber" name="phone-number" placeholder="Phone" required required>
              <input type="text" id="dateOfInterview" name="date-of-interview" placeholder="Select the date of interview" onfocus="(this.type='date')" required>
              <div class="radio">
                <p>Level of Education:</p>
                <div class="radio-container">
                 <div class="radio-group">
                  <input type="radio" id="beginner" name="qualification" value="Beginner" required>
                  <label for="beginner">just beginning</label>
                 </div>
                 <div class="radio-group">
                   <input type="radio" id="readRight" name="qualification" value="Read and write" required>
                   <label for="readRight"> I can read and write</label>
                 </div>
                 <div class="radio-group">
                  <input type="radio" id="idadi" name="qualification" value="Idadi" required>
                  <label for="idadi">Certificate of Idadi</label>
                 </div>
                  <div class="radio-group">
                    <input type="radio" id="thanawi" name="qualification" value="Thanawi" required>
                  <label for="thanawi">Certificate of Thanawi</label>
                  </div>
                  <div class="radio-group">
                    <input type="radio" id="others" name="qualification" value="Others" required>
                  <label for="others">Others</label>
                  </div>
                </div>

              </div>
              <div class="btn-container">
                <button type="button" class="next-btn btn">Next</button>
              </div>
            </div>

            <div class="step step-2">
              <h3 class="step-heading">CONTACT PERSON’S DETAILS</h3>
                <input type="text" id="fname" name="contact-person-firstname" placeholder="First Name" required>
                <input type="text" id="lname" name="contact-person-lastname" placeholder="Last Name" required>

                <input type="tel" id="phone" name="Phone Number" placeholder="Phone" required>
                <input type="text" id="relationship" name="Relationship" placeholder="Relationship" required>
                <div class="button-group">
                  <button type="button" class="previous-btn btn">Prev</button>
                  <button type="button" class="next-btn btn">Next</button>
                </div>
            </div>

            <div class="step step-3">
              <h3 class="step-heading">Course</h3>
              <label for="course">Choose a course:</label>
              <select id="course" name="course">
                <option value="Quran">Quran</option>
                <option value="Shariah">Shariah</option>
                <option value="Arabic">Arabic</option>
                <option value="Combined">Combined</option>
              </select>
              <div class="button-group">
                <button type="button" class="previous-btn btn">Prev</button>
                <button type="submit" class="submit-btn btn" value="Send">Submit</button>
              </div>
            </div>
          </form>
          <form action="https://formsubmit.co/appform@irinstitute-ng.org" method="post" class="className" name="student" id="student" style="display: none;">
            <input type="hidden" name="_subject" value="Ibbadulrrahman E-Academy">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_next" value="https://irinstitute-ng.org/success.html">

            <div class="step step-1 active">
              <h3 class="step-heading">For tertiary institution student</h3>
              <div class="input-group">
                <input type="text" id="firstName" name="first-name" placeholder="First Name" required>
                <input type="text" id="lastName" name="last-name" placeholder="Last Name" required>
              </div>
              <input type="email" id="emailAddress" name="email" placeholder="Email" required>
              <div class="input-group">
              <input type="text" id="dateOfBirth" name="date-of-birth" placeholder="Date of Birth" onfocus="(this.type='date')" required>
              <input type="text" id="city" name="city" placeholder="City" required>
              </div>
              <input type="tel" id="phoneNumber" name="phone-number" placeholder="Phone" required>
              <input type="text" id="institutionName" name="Name-of-institution" placeholder="Name of Institution" required>
              <input type="text" id="dateOfInterview" name="date-of-interview" placeholder="Select the date of interview" onfocus="(this.type='date')" required>
              <div class="student-info">Note:All tertiary institution students are to present their ID cards during the interview</div>
              <div class="radio">
                <p>Level of Education:</p>
                <div class="radio-container">
                 <div class="radio-group">
                  <input type="radio" id="beginner" name="qualification" value="Beginner" required>
                  <label for="beginner">just beginning</label>
                 </div>
                 <div class="radio-group">
                   <input type="radio" id="readRight" name="qualification" value="Read and write" required>
                   <label for="readRight"> I can read and write</label>
                 </div>
                 <div class="radio-group">
                  <input type="radio" id="idadi" name="qualification" value="Idadi" required>
                  <label for="idadi">Certificate of Idadi</label>
                 </div>
                  <div class="radio-group">
                    <input type="radio" id="thanawi" name="qualification" value="Thanawi" required>
                  <label for="thanawi">Certificate of Thanawi</label>
                  </div>
                  <div class="radio-group">
                    <input type="radio" id="others" name="qualification" value="Others" required>
                  <label for="others">Others</label>
                  </div>
                </div>

              </div>
              <div class="btn-container">
                <button type="button" class="next-btn btn">Next</button>
              </div>
            </div>

            <div class="step step-2">
              <h3 class="step-heading">CONTACT PERSON’S DETAILS</h3>
                <input type="text" id="fname" name="contact-person-firstname" placeholder="First Name" required>
                <input type="text" id="lname" name="contact-person-lastname" placeholder="Last Name" required>

                <input type="tel" id="phone" name="Phone" placeholder="Phone" required>
                <input type="text" id="relationship" name="Relationship" placeholder="Relationship" required>
                <div class="button-group">
                  <button type="button" class="previous-btn btn">Prev</button>
                  <button type="button" class="next-btn btn">Next</button>
                </div>
            </div>

            <div class="step step-3">
              <h3 class="step-heading">Course</h3>
              <label for="course">Choose a course:</label>
              <select id="course" name="course">
                <option value="Quran">Quran</option>
                <option value="Shariah">Shariah</option>
                <option value="Arabic">Arabic</option>
                <option value="Combined">Combined</option>
              </select>
              <div class="button-group">
                <button type="button" class="previous-btn btn">Prev</button>
                <button type="submit" class="submit-btn btn" value="Send">Submit</button>
              </div>
            </div>
          </form>
       </section>
       <script src="{{asset('frontend/js/form.js')}}"></script>
</body>
</html>
