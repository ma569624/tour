<!doctype html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>

    <?php include 'header.php' ?>

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Ticket</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="index.php">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Ticket</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-wrapper pt-90">
        <div class="contact-cards">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="flaticon-arrival"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Address</h5>
                                <p>Dehli</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="flaticon-customer-service"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Email & Phone</h5>
                                <p>
                                    Info@gbsiata.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="flaticon-thumbs-up"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Social Media</h5>
                                <ul class="contact-icons">
                                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-whatsapp'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact-inputs pt-120">
                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="#" method="post">
                                <h5 class="contact-d-head">Send Enquiry</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-item webform-component webform-component-select webform-component--fname form-group form-item form-item-submitted-fname form-type-select form-group"> <label class="control-label" for="edit-submitted-fname">Name</label>
                            <select class="form-control form-control form-select" id="edit-submitted-fname" name="submitted[fname]">
                                <option value="Mr." selected="selected">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Miss.">Miss.</option>
                            </select>
                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-item webform-component webform-component-textfield webform-component--name form-group form-item form-item-submitted-name form-type-textfield form-group"> <label class="control-label" for="edit-submitted-name">Name <span class="form-required" title="This field is required.">*</span></label>
                            <input required="required" placeholder="Enter Name" class="form-control form-control form-text required" type="text" id="edit-submitted-name" name="submitted[name]" value="" size="60" maxlength="128" />
                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-item webform-component webform-component-textfield webform-component--mobile form-group form-item form-item-submitted-mobile form-type-textfield form-group"> <label class="control-label" for="edit-submitted-mobile">Mobile <span class="form-required" title="This field is required.">*</span></label>
                            <input required="required" placeholder="Enter Mobile Number" class="form-control form-control form-text required" type="text" id="edit-submitted-mobile" name="submitted[mobile]" value="" size="60" maxlength="128" />
                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-item webform-component webform-component-email webform-component--email form-group form-item form-item-submitted-email form-type-webform-email form-group"> <label class="control-label" for="edit-submitted-email">Email <span class="form-required" title="This field is required.">*</span></label>
                            <input required="required" class="email form-control form-control form-text form-email required" placeholder="Enter Email" type="email" id="edit-submitted-email" name="submitted[email]" size="60" />
                        </div>
                                    </div>
                        <div class="col-lg-12">
                                    <div class="form-item webform-component webform-component-select webform-component--no-of-guests form-group form-item form-item-submitted-no-of-guests form-type-select form-group"> <label class="control-label" for="edit-submitted-no-of-guests">No of Guests <span class="form-required" title="This field is required.">*</span></label>
                            <select required="required" class="form-control form-select required" id="edit-submitted-no-of-guests" name="submitted[no_of_guests]">
                                <option value="" selected="selected">- Select -</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="Group Above 10">Group Above 10</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-item webform-component webform-component-textfield webform-component--children form-group form-item form-item-submitted-children form-type-textfield form-group"> <label class="control-label" for="edit-submitted-children">Children</label>
                            <input placeholder="Children (5 - 12 Yrs) " class="form-control form-control form-text" type="text" id="edit-submitted-children" name="submitted[children]" value="" size="60" maxlength="128" />
                        </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-item webform-component webform-component-date webform-component--check-in-dates form-group form-item form-item-submitted-check-in-dates form-type-date form-group"> <label class="control-label" for="edit-submitted-check-in-dates">Check In Date <span class="form-required" title="This field is required.">*</span></label>
                            <div class="webform-container-inline webform-datepicker">
                                <div class="form-item form-item-submitted-check-in-dates-month form-type-select form-group"><select class="month form-control form-select" required="required" id="edit-submitted-check-in-dates-month" name="submitted[check_in_dates][month]">
                                        <option value="">Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8" selected="selected">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select> <label class="control-label element-invisible" for="edit-submitted-check-in-dates-month">Month</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-item webform-component webform-component-date webform-component--check-in-dates form-group form-item form-item-submitted-check-in-dates form-type-date form-group"> <label class="control-label" for="edit-submitted-check-in-dates">Check In Date <span class="form-required" title="This field is required.">*</span></label>
                            <div class="webform-container-inline webform-datepicker">
                                <div class="form-item form-item-submitted-check-in-dates-month form-type-select form-group"><select class="month form-control form-select" required="required" id="edit-submitted-check-in-dates-month" name="submitted[check_in_dates][month]">
                                        <option value="">Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8" selected="selected">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select> <label class="control-label element-invisible" for="edit-submitted-check-in-dates-month">Month</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                                    <div class="form-item webform-component webform-component-email webform-component--email form-group form-item form-item-submitted-email form-type-webform-email form-group"> <label class="control-label" for="edit-submitted-email">Email <span class="form-required" title="This field is required.">*</span></label>
                            <input required="required" class="email form-control form-control form-text form-email required" placeholder="Enter Email" type="email" id="edit-submitted-email" name="submitted[email]" size="60" />
                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Send Enquiry</h4>
            </div>
            <div class="modal-body">
                <form class="webform-client-form webform-client-form-12359" action="/eastern-europe-tour-packages" method="post" id="webform-client-form-12359" accept-charset="UTF-8">
                    <div>
                        <div class="form-item webform-component webform-component-select webform-component--fname form-group form-item form-item-submitted-fname form-type-select form-group"> <label class="control-label" for="edit-submitted-fname">Name</label>
                            <select class="form-control form-control form-select" id="edit-submitted-fname" name="submitted[fname]">
                                <option value="Mr." selected="selected">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Miss.">Miss.</option>
                            </select>
                        </div>
                        <div class="form-item webform-component webform-component-textfield webform-component--name form-group form-item form-item-submitted-name form-type-textfield form-group"> <label class="control-label" for="edit-submitted-name">Name <span class="form-required" title="This field is required.">*</span></label>
                            <input required="required" placeholder="Enter Name" class="form-control form-control form-text required" type="text" id="edit-submitted-name" name="submitted[name]" value="" size="60" maxlength="128" />
                        </div>
                        <div class="form-item webform-component webform-component-textfield webform-component--mobile form-group form-item form-item-submitted-mobile form-type-textfield form-group"> <label class="control-label" for="edit-submitted-mobile">Mobile <span class="form-required" title="This field is required.">*</span></label>
                            <input required="required" placeholder="Enter Mobile Number" class="form-control form-control form-text required" type="text" id="edit-submitted-mobile" name="submitted[mobile]" value="" size="60" maxlength="128" />
                        </div>
                        <div class="form-item webform-component webform-component-email webform-component--email form-group form-item form-item-submitted-email form-type-webform-email form-group"> <label class="control-label" for="edit-submitted-email">Email <span class="form-required" title="This field is required.">*</span></label>
                            <input required="required" class="email form-control form-control form-text form-email required" placeholder="Enter Email" type="email" id="edit-submitted-email" name="submitted[email]" size="60" />
                        </div>
                        <div class="form-item webform-component webform-component-select webform-component--no-of-guests form-group form-item form-item-submitted-no-of-guests form-type-select form-group"> <label class="control-label" for="edit-submitted-no-of-guests">No of Guests <span class="form-required" title="This field is required.">*</span></label>
                            <select required="required" class="form-control form-select required" id="edit-submitted-no-of-guests" name="submitted[no_of_guests]">
                                <option value="" selected="selected">- Select -</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="Group Above 10">Group Above 10</option>
                            </select>
                        </div>
                        <div class="form-item webform-component webform-component-textfield webform-component--children form-group form-item form-item-submitted-children form-type-textfield form-group"> <label class="control-label" for="edit-submitted-children">Children</label>
                            <input placeholder="Children (5 - 12 Yrs) " class="form-control form-control form-text" type="text" id="edit-submitted-children" name="submitted[children]" value="" size="60" maxlength="128" />
                        </div>
                        <div class="form-item webform-component webform-component-date webform-component--check-in-dates form-group form-item form-item-submitted-check-in-dates form-type-date form-group"> <label class="control-label" for="edit-submitted-check-in-dates">Check In Date <span class="form-required" title="This field is required.">*</span></label>
                            <div class="webform-container-inline webform-datepicker">
                                <div class="form-item form-item-submitted-check-in-dates-month form-type-select form-group"><select class="month form-control form-select" required="required" id="edit-submitted-check-in-dates-month" name="submitted[check_in_dates][month]">
                                        <option value="">Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8" selected="selected">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select> <label class="control-label element-invisible" for="edit-submitted-check-in-dates-month">Month</label>
                                </div>
                                <div class="form-item form-item-submitted-check-in-dates-day form-type-select form-group"><select class="day form-control form-select" required="required" id="edit-submitted-check-in-dates-day" name="submitted[check_in_dates][day]">
                                        <option value="">Day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30" selected="selected">30</option>
                                        <option value="31">31</option>
                                    </select> <label class="control-label element-invisible" for="edit-submitted-check-in-dates-day">Day</label>
                                </div>
                                <div class="form-item form-item-submitted-check-in-dates-year form-type-select form-group"><select class="year form-control form-select" required="required" id="edit-submitted-check-in-dates-year" name="submitted[check_in_dates][year]">
                                        <option value="">Year</option>
                                        <option value="2022" selected="selected">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select> <label class="control-label element-invisible" for="edit-submitted-check-in-dates-year">Year</label>
                                </div>
                                <input type="text" id="edit-submitted-check-in-dates" class="form-control form-text webform-calendar webform-calendar-start-2022-08-30 webform-calendar-end-2024-08-30 webform-calendar-day-1" alt="Open popup calendar" title="Open popup calendar" />
                            </div>
                        </div>
                        <div class="form-item webform-component webform-component-date webform-component--check-out-dates form-group form-item form-item-submitted-check-out-dates form-type-date form-group"> <label class="control-label" for="edit-submitted-check-out-dates">Check Out Date <span class="form-required" title="This field is required.">*</span></label>
                            <div class="webform-container-inline webform-datepicker">
                                <div class="form-item form-item-submitted-check-out-dates-month form-type-select form-group"><select class="month form-control form-select" required="required" id="edit-submitted-check-out-dates-month" name="submitted[check_out_dates][month]">
                                        <option value="">Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8" selected="selected">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select> <label class="control-label element-invisible" for="edit-submitted-check-out-dates-month">Month</label>
                                </div>
                                <div class="form-item form-item-submitted-check-out-dates-day form-type-select form-group"><select class="day form-control form-select" required="required" id="edit-submitted-check-out-dates-day" name="submitted[check_out_dates][day]">
                                        <option value="">Day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31" selected="selected">31</option>
                                    </select> <label class="control-label element-invisible" for="edit-submitted-check-out-dates-day">Day</label>
                                </div>
                                <div class="form-item form-item-submitted-check-out-dates-year form-type-select form-group"><select class="year form-control form-select" required="required" id="edit-submitted-check-out-dates-year" name="submitted[check_out_dates][year]">
                                        <option value="">Year</option>
                                        <option value="2022" selected="selected">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select> <label class="control-label element-invisible" for="edit-submitted-check-out-dates-year">Year</label>
                                </div>
                                <input type="text" id="edit-submitted-check-out-dates" class="form-control form-text webform-calendar webform-calendar-start-2022-08-30 webform-calendar-end-2024-08-30 webform-calendar-day-1" alt="Open popup calendar" title="Open popup calendar" />
                            </div>
                        </div>
                        <div class="form-item webform-component webform-component-select webform-component--category-of-hotels-needed form-group form-item form-item-submitted-category-of-hotels-needed form-type-select form-group"> <label class="control-label" for="edit-submitted-category-of-hotels-needed">Category of Hotels Needed</label>
                            <select class="form-control form-control form-select" id="edit-submitted-category-of-hotels-needed" name="submitted[category_of_hotels_needed]">
                                <option value="" selected="selected">- None -</option>
                                <option value="Budget">Budget</option>
                                <option value="Deluxe">Deluxe</option>
                                <option value="Luxury">Luxury</option>
                            </select>
                        </div>
                        <div class="form-item webform-component webform-component-textarea webform-component--message form-group form-item form-item-submitted-message form-type-textarea form-group"> <label class="control-label" for="edit-submitted-message">Message <span class="form-required" title="This field is required.">*</span></label>
                            <div class="form-textarea-wrapper resizable"><textarea required="required" class="form-control form-textarea required" id="edit-submitted-message" name="submitted[message]" cols="60" rows="5"></textarea></div>
                        </div>
                        <div class="form-item webform-component webform-component-checkboxes webform-component--term--conditions form-group form-item form-item-submitted-term--conditions form-type-checkboxes form-group"> <label class="control-label" for="edit-submitted-term-conditions">Term &amp; Conditions <span class="form-required" title="This field is required.">*</span></label>
                            <div id="edit-submitted-term-conditions" class="form-checkboxes">
                                <div class="form-item form-item-submitted-term--conditions-1 form-type-checkbox checkbox"> <label class="control-label" for="edit-submitted-term-conditions-1"><input required="required" type="checkbox" id="edit-submitted-term-conditions-1" name="submitted[term__conditions][1]" value="1" checked="checked" class="form-checkbox" />I authorize Swan Tours &amp; its representatives to Call , SMS &amp; Email me with reference to my Travel Enquiry. This consent will override any registration for DNC / NDNC.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-item webform-component webform-component-markup webform-component--load form-group form-item form-type-markup form-group">
                            <div class="loader"></div>
                        </div>
                        <div class="form-item webform-component webform-component-hidden webform-component--content-path form-item form-item-submitted-content-path form-type-hidden" style="display: none"><input type="hidden" name="submitted[content_path]" value="" />
                        </div><input type="hidden" name="details[sid]" />
                        <input type="hidden" name="details[page_num]" value="1" />
                        <input type="hidden" name="details[page_count]" value="1" />
                        <input type="hidden" name="details[finished]" value="0" />
                        <input type="hidden" name="form_build_id" value="form-2R9rZk7uKRMBmBTLNbBBlKYSqZ5-fXSzgZRR6Uux6pw" />
                        <input type="hidden" name="form_id" value="webform_client_form_12359" />
                        <input type="hidden" name="honeypot_time" value="1661859406|B3zz4dgFNfPeHvD_q2aVJ0s2RhQjT7g7Uzl-2K_zbOw" />
                        <div class="url-textfield">
                            <div class="form-item form-item-url form-type-textfield form-group"> <label class="control-label" for="edit-url">Leave this field blank</label>
                                <input autocomplete="off" class="form-control form-text" type="text" id="edit-url" name="url" value="" size="20" maxlength="128" />
                            </div>
                        </div>
                        <div class="captcha"><input type="hidden" name="captcha_sid" value="2414111" />
                            <input type="hidden" name="captcha_token" value="6378dea0bfd98c2405b7417de3cb343d" />
                            <input type="hidden" name="captcha_response" value="Google no captcha" />
                            <div class="g-recaptcha" data-sitekey="6LeIB2YUAAAAADbE3Htd3s_Yam5ZcCR7dcC35Pnc" data-theme="light" data-type="image"></div>
                        </div>
                        <div class="form-actions"><button class="webform-submit button-primary btn btn-primary form-submit" type="submit" name="op" value="Submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

   <?php include 'footer.php' ?>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>