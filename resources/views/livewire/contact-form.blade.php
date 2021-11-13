<div class="BgColor-white ContactForm">
    <div class="Montserrat-xbold Font-24">Contact Us</div>
    <p class="Roboto LineHeight Font-14">
        Use this form to contact us for sales requests, career information, investor relations, corporate information, or general questions. For warranty information, or to purchase replacement parts/keys, please contact a local authorized dealer.
    </p>

        <form onSubmit={this.handleSubmit}>
            <div class="Roboto Font-14 MarginTop-xlarge">
              I AM CONTACT YOU ABOUT
            </div>
            
            <input
              type="text"
              name="about"
            />
          
          <div class="Flex Flex-wrap">
            <label class="MarginRight-large">
              <div class="Roboto Font-14 MarginTop-large">FIRST NAME</div>
              <input
                type="text"
                name="firstName"
              />
            </label>

            <label>
              <div class="Roboto Font-14 MarginTop-large">LAST NAME</div>
              <input
                type="text"
                name="lastName"
              />
            </label>
          </div>
          <div class="Flex Flex-wrap">
            <label class="MarginRight-large">
              <div class="Roboto Font-14 MarginTop-large">
                EMAIL ADDRESS *
              </div>
              <input
                type="email"
                name="email"
              />
            </label>

            <label>
              <div class="Roboto Font-14 MarginTop-large">PHONE *</div>
              <input
                type="tel"
                name="phoneNumber"
              />
            </label>
          </div>
          <label>
            <div class="Roboto Font-14 MarginTop-large"> COMPANY</div>
            <input
              type="tel"
              name="company"
            />
          </label>
          <div class="Oblique MarginTop"> * Required Fields</div>
          <div
            class="MarginTop Flex JustifyContent-end Ta"
          >
            <button
              class="JustifyContent-end ButtonForm"
              type="submit"
              value="Submit"
            >
              SUBMIT
            </button>
          </div>
        </form>
</div>
