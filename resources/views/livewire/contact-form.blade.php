<div class="BgColor-white ContactForm">
    <div class="Montserrat-xbold Font-24">Contact Us</div>
    <p class="Roboto LineHeight Font-14">
        Use this form to contact us for sales requests, career information, investor relations, corporate information, or general questions. For warranty information, or to purchase replacement parts/keys, please contact a local authorized dealer.
    </p>

        @if ($isSuccess)
          <div class="alert alert-success" style="color:  #4BB543;">
            Email Send Successfuly
          </div>
        @endif

        <form wire:submit.prevent="submitForm" action="/contact" method="POST">
          @csrf
            <div class="Roboto Font-14 MarginTop-xlarge">
              I AM CONTACT YOU ABOUT
            </div>
            
            <input
              type="text"
              name="about"
              wire:model="about"
            />
          
          <div class="Flex Flex-wrap">
            <label class="MarginRight-large">
              <div class="Roboto Font-14 MarginTop-large">FIRST NAME</div>
              <input
                type="text"
                name="firstName"
                wire:model="firstName"
              />
            </label>

            <label>
              <div class="Roboto Font-14 MarginTop-large">LAST NAME</div>
              <input
                type="text"
                name="lastName"
                wire:model="lastName"
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
                wire:model="email"
              />
              @error('email')<div style="color: red; font-family: Roboto, 'sans-serif; margin-right: 50px;"> Email Required </div>@enderror
            </label>

            <label>
              <div class="Roboto Font-14 MarginTop-large">PHONE *</div>
              <input
                type="tel"
                name="phoneNumber"
                wire:model="phone"
              />
              @error('phone')<div style="color: red; font-family: Roboto, 'sans-serif;"> Phone Number Required </div>@enderror
            </label>
          </div>
          
          <label>
            <div class="Roboto Font-14 MarginTop-large"> COMPANY</div>
            <input
              type="tel"
              name="company"
              wire:model="company"
            />
          </label>
          <div class="Oblique MarginTop"> * Required Fields</div>
          <div
            class="MarginTop Flex JustifyContent-end Ta"
          >
            @if ($loading === false)
              <button
                class="JustifyContent-end ButtonForm"
                type="submit"
                value="Submit"
              >
                SUBMIT
              </button>
            @endif
          </div>
          @method('PUT')
        </form>
</div>
