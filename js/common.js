$("document").ready(function () {
    $("#callbackform")[0].reset();
}),
    $(".LettersOnly").on("input", function (a) {
        this.value = this.value.replace(/[^a-zA-Z. ]/g, "");
    }),
    $(".LettersOnlyDot").on("input", function (a) {
        this.value = this.value.replace(/[^a-zA-Z. ]/g, "");
    }),
    $(".NumberOnlyDate").on("input", function (a) {
        this.value = this.value.replace(/[^0-9/ ]/g, "");
    }),
    $(".NumbersLetters").on("input", function (a) {
        this.value = this.value.replace(/[^a-zA-Z0-9]/g, "");
    }),
    $(".NumberOnly").on("input", function (a) {
        this.value = this.value.replace(/[^0-9, ]/g, "");
    });
const stringCapitalize = (a) => a.replace(/\b\w/g, (a) => a.toUpperCase());
function validDigits(a, b) {
    a.value.length > b && (a.value = a.value.slice(0, b));
}
function addCommas(a) {
    if ("" == a || isNaN(a)) return "";
    var b = (a = a.toString()).substring(a.length - 3),
        c = a.substring(0, a.length - 3);
    return "" != c && (b = "," + b), c.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + b;
}
function auction_property_type() {
    var a = $("#secure_token_branch").val();
    $.ajax({
        url: "get_auction_property_locator_data.php",
        type: "POST",
        data: "type=property_type&secure_token=" + a,
        success: function (b) {
            success_data = JSON.parse(b);
            for (var a = 0; a < success_data.length; a++) {
                var c = '<option value="' + success_data[a].type + '">' + success_data[a].type + "</option>";
                $("#property_type1").append(c);
            }
        },
    });
}
function auction_price_range() {
    var a = $("#secure_token_branch").val();
    $.ajax({
        url: "get_auction_property_locator_data.php",
        type: "POST",
        data: "type=price&secure_token=" + a,
        success: function (a) {
            (success_data = JSON.parse(a)),
                $("#price1").html(
                    '<option value="" selected>Market Price</option><option value="500000">Up to 5 Lakhs</option><option value="2000000">5 - 20 Lakhs</option><option value="5000000">20 - 50 Lakhs</option><option value="10000000">50 Lakhs - 1 Cr</option><option value="1cr">Above 1 Cr</option>'
                );
        },
    });
}
function auction_location() {
    var a = $("#secure_token_branch").val();
    $.ajax({
        url: "get_auction_property_locator_data.php",
        type: "POST",
        data: "type=location&secure_token=" + a,
        success: function (b) {
            success_data = JSON.parse(b);
            for (var a = 0; a < success_data.length; a++) {
                var c = '<option value="' + success_data[a].city + '">' + success_data[a].city + "</option>";
                $("#location1").append(c);
            }
        },
    });
}
function add_state() {
    var a = $("#secure_token_branch").val();
    $.ajax({
        url: "../get_branch_locator_data.php",
        type: "POST",
        data: "type=state&secure_token=" + a,
        success: function (b) {
            success_data = JSON.parse(b);
            for (var a = 0; a < success_data.length; a++) {
                var c = '<option value="' + success_data[a].state + '">' + success_data[a].state + "</option>";
                $("#state").append(c);
            }
        },
    });
}
function add_connectorstate() {
    var a = $("#secure_token_branch").val();
    $.ajax({
        url: "../get_branch_locator_data.php",
        type: "POST",
        data: "type=state&secure_token=" + a,
        success: function (b) {
            success_data = JSON.parse(b);
            for (var a = 0; a < success_data.length; a++) {
                var c = '<option value="' + success_data[a].state + '">' + success_data[a].state + "</option>";
                $("#connectorstate").append(c);
            }
        },
    });
}
function add_state_auction_notice_dropdown() {
    var a = $("#secure_token_branch").val();
    $.ajax({
        url: "../get_auction_locator_data.php",
        type: "POST",
        data: "type=state&secure_token=" + a,
        success: function (b) {
            success_data = JSON.parse(b);
            for (var a = 0; a < success_data.length; a++) {
                var c = '<option value="' + success_data[a].state + '">' + success_data[a].state + "</option>";
                $("#state_auction_notice_dropdown").append(c);
            }
        },
    });
}
function add_state_auction_notice() {
    var a = $("#secure_token_branch").val();
    $.ajax({
        url: "get_auction_notice_data.php",
        type: "POST",
        data: "type=state&secure_token=" + a,
        success: function (b) {
            success_data = JSON.parse(b);
            for (var a = 0; a < success_data.length; a++) {
                var c = '<option value="' + success_data[a].state + '">' + success_data[a].state + "</option>";
                $("#state_auction_notice").append(c);
            }
        },
    });
}
function add_city_auction_notice() {
    var a = $("#secure_token_branch").val();
    $.ajax({
        url: "get_auction_notice_data.php",
        type: "POST",
        data: "type=city&secure_token=" + a,
        success: function (b) {
            success_data = JSON.parse(b);
            for (var a = 0; a < success_data.length; a++) {
                var c = '<option value="' + success_data[a].city + '">' + success_data[a].city + "</option>";
                $("#city").append(c);
            }
        },
    });
}
function findValueInArray(d, b) {
    for (var c = "Doesn't exist", a = 0; a < b.length; a++)
        if (b[a] == d) {
            c = "Exist";
            break;
        }
    return c;
}
function add_contact_us_city() {
    $("#lstv").val("0");
    var a = [];
    $.ajax({
        url: "get_contact_us_city.php",
        type: "POST",
        data: "type=city",
        success: function (c) {
            success_data = JSON.parse(c);
            for (var b = 0; b < success_data.length; b++) {
                var d = '<option value="' + success_data[b].city + '">' + success_data[b].city + "</option>";
                $("#City").append(d), a.push(success_data[b].city);
            }
            $("#City").autocomplete({ source: a }),
                $("#City").change(function () {
                    "Exist" == findValueInArray($(this).val(), a) ? $("#lstv").val("1") : $("#lstv").val("0");
                });
        },
    });
}
$("#state_auction_notice_dropdown").change(function () {
    console.log("ok");
    var a = this.value,
        b = $("#secure_token_branch").val();
    $("#city").find("option").remove(),
        $.ajax({
            url: "../get_auction_locator_data.php",
            type: "POST",
            data: "type=city&state=" + a + "&secure_token=" + b,
            success: function (b) {
                (success_data = JSON.parse(b)), $("#city").append('<option value="" selected disabled >City</option>');
                for (var a = 0; a < success_data.length; a++) {
                    var c = '<option value="' + success_data[a].city + '">' + success_data[a].city + "</option>";
                    $("#city").append(c);
                }
            },
        });
}),
    $(".autoCapitalized").keyup(function (a) {
        $(this).val(stringCapitalize($(this).val()));
    }),
    $(".autoCapitalizedFirst").keyup(function (a) {
        32 !== a.which || this.value.length || a.preventDefault(), $(this).val($(this).val().substr(0, 1).toUpperCase() + $(this).val().substr(1).toLowerCase());
    }),
    $.validator.addMethod("minStrict", function (a, c, b) {
        return a.replace(/,/g, "") > b;
    }),
    $.validator.addMethod("maxStrict", function (a, c, b) {
        return a.replace(/,/g, "") < b;
    }),
    $.validator.addMethod("checkCity", function (a, b, c) {
        return 1 == $("#lstv").val();
    }),
    $.validator.addMethod("mailCustom", function (a, b, c) {
        return !!/^([a-zA-Z0-9][a-zA-Z0-9_\.\-\+]{1,})@([a-zA-Z0-9][a-zA-Z0-9\-]{1,}).([a-zA-Z]{2,4})(\.[a-zA-Z]{2,4})?$/.test(a);
    }),
    $(".opentc").click(function () {
        $("#callbackform").hide(), $(".tncdiv").show();
    }),
    $(".closetnc").click(function () {
        $("#callbackform").show(), $(".tncdiv").hide();
    }),
    $("#callbackform").validate({
        ignore: [":not(checkbox)"],
        onkeyup: function (a, b) {
            if (($("#" + a.id).val(), "mobilee" === a.id)) return !1;
            this.element(a);
        },
        onfocusout: function (a, c) {
            var b = $("#" + a.id).val();
            if ("mobilee" === a.id && "10" == b.length) return $(".mobile_div").find(".error").text() && $(".mobile_div").find(".error").html(""), !1;
            this.element(a);
        },
        errorElement: "div",
        rules: {
            fname: { required: !0, minlength: 1, maxlength: 99 },
       //     lname: { required: !0, minlength: 1, maxlength: 99 },
            // email: { required: !0, mailCustom: !0 },
            mobilee: { required: !0, digits: !0, minlength: 10, maxlength: 10 },
            timing: { required: !0 },
         //   digit: { required: !0 },
            "chkTerm[]": { required: !0 },
        },
        messages: {
            fname: { required: "Enter you Name", minlength: "Enter you Name", maxlength: "Enter you Name" },
          //  lname: { required: "Name as per PAN", minlength: "Name as per PAN", maxlength: "Name as per PAN" },
            // email: { required: "Enter a valid email ID", mailCustom: "Enter a valid email ID" },
            mobilee: { required: "Enter a valid number", digits: "Enter a valid number", minlength: "Enter a valid number", maxlength: "Enter a valid number" },
            timing: { required: "Select preferred time" },
         //   digit: { required: "Enter a valid OTP" },
            "chkTerm[]": { required: "Please check T&C" },
        },
        errorPlacement: function (b, a) {
            "radio" === a.prop("type") ? b.insertAfter(a) : "tel" === a.prop("type") || "checkbox" === a.prop("type") ? b.appendTo(a.parent().parent()) : b.appendTo(a.parent());
        },
        submitHandler: function (a, c) {
            var b = $(a).serialize();
            $.ajax({
                url: "submit_callback.php",
                type: "POST",
                data: b,
                beforeSend: function() {
                    $('.get_call_back_btn').attr('disabled', 'disabled');
                },
                success: function (c) {
                    var b = c.split("###");
                    if(b[1] == 'Success')
                    {
                        $('.get_call_back_btn').removeAttr("disabled");
                    }
                    "Success" == b[1] ? ($(a)[0].reset(), location.replace("get-a-call-back-thank-you.php")) : "Failed2" == b[1] ? alert("" + b[2]) : alert("Something went wrong.");
                },
            });
        },
    }),
    $("#mobile").on("input", function (e) {
        $(".otp_text").val(""), $("#otp").val("");
        var a = $("#mobile").val(),
            b = $("#secure_token_callback").val();
        if (10 == a.length) {
            var c = "send_otp.php";
            $.ajax({
                url: "" + c,
                type: "POST",
                data: { mobile: a, secure_token: b, type: "callback_otp_send" },
                success: function (c) {
                    console.log(c);
                    var b = c.split("###");
                    "Success" == b[1]
                        ? ($(".mobile_div").find(".error").html(""),
                          $("#lbl_mobile_callback").html("OTP Sent."),
                          $("#lbl_mobile_callback").show(),
                          $("#mobile_verified").val("" + a),
                          setTimeout(function () {
                              $("#lbl_mobile_callback").hide(), $(".otp").show(), $("#digit-1").prop("readonly", !1);
                          }, 1500))
                        : "Failed2" == b[1]
                        ? alert("" + b[2])
                        : ($("#mobile_error_callback").html("Something wrong."),
                          $("#mobile_error_callback").show(),
                          setTimeout(function () {
                              $("#mobile_error_callback").hide();
                          }, 1500));
                },
            });
        } else {
            var d = $(".mobile_div").find(".error").text();
            $(".otp_text").prop("readonly", !0), d || ($("#lblError_mobile").html(""), $("#lblError_mobile").html("Enter a valid number"));
        }
    }),
    $("#digit-3").on("input", function (a) {
        this.value ? $("#digit-4").prop("readonly", !1) : $("#digit-4").prop("readonly", !0);
    }),
    $("#digit-4").on("input", function (j) {
        var b = this.value,
            a = $("#mobile").val();
        if (b && a) {
            var c = $("#digit-1").val(),
                d = $("#digit-2").val(),
                e = $("#digit-3").val(),
                f = $("#digit-4").val(),
                g = c + "" + d + e + f,
                h = $("#secure_token_callback").val(),
                i = "send_otp.php";
            $.ajax({
                url: "" + i,
                type: "POST",
                data: { otp: g, mobile: a, secure_token: h, type: "callback_otp_check" },
                success: function (c) {
                    var b = c.split("###");
                    "Success" == b[1]
                        ? ($("#otp_verified_callback").val("1"),
                          $(".mobile_div").hide(),
                          $("#mobile_verified").val("" + a),
                          $("#mobile_verified").parent().addClass("isvalid"),
                          $(".verified_mobile_div").show(),
                          $(".otp_text").prop("readonly", !0),
                          $("#otp_error_callback").html("OTP Matched."),
                          $("#otp_error_callback").show(),
                          setTimeout(function () {
                              $("#otp_error_callback").hide();
                          }, 1500))
                        : "Failed2" == b[1]
                        ? alert("" + b[2])
                        : ($("#otp_error_callback").html("Wrong OTP, Recheck."),
                          $("#otp_error_callback").show(),
                          setTimeout(function () {
                              $("#otp_error_callback").hide();
                          }, 1500));
                },
            });
        } else $(".verified_mobile_div").hide(), $(".mobile_div").show();
    }),
    jQuery.validator.addMethod(
        "otp_verified_callback",
        function (a, b) {
            return 1 == $("#otp_verified_callback").val();
        },
        ""
    ),
    $("#contactform").validate({
        ignore: [":not(checkbox)"],
        onkeyup: function (a, b) {
            if ("Mobile_Number" === a.id || "verified_mobile_number" === a.id) return !1;
            this.element(a);
        },
        onfocusout: function (a, c) {
            var b = $("#" + a.id).val();
            if ("Mobile_Number" === a.id && "10" == b.length) return $(".mobile_div_contact").find(".error").text() && $(".mobile_div_contact").find(".error").html(""), !1;
            this.element(a);
        },
        errorElement: "div",
        rules: {
            radios_option_cutomer: { required: !0 },
            first_name: { required: !0, minlength: 1, maxlength: 99 },
            last_name: { required: !0, minlength: 1, maxlength: 99 },
            mobile_number: { required: !0, digits: !0, minlength: 10, maxlength: 10, otp_verified2: !0 },
            verified_mobile_number: { otp_verified2: !0 },
            radios_option_purpose: { required: !0 },
            product_type: { required: !0 },
            otp: { required: !0 },
            checkbox: { required: !0 },
        },
        messages: {
            radios_option_cutomer: { required: "Please select" },
            first_name: { required: ""},
            last_name: { required: "" },
            email_id: { required: "Enter a valid email ID", mailCustom: "Enter a valid email ID" },
            mobile_number: { required: "Enter a valid number", digits: "Enter a valid number", minlength: "Enter a valid number", maxlength: "Enter a valid number", otp_verified2: "Number not verified" },
            verified_mobile_number: { otp_verified2: "Number not verified" },
            radios_option_purpose: { required: "Select a purpose" },
            product_type: { required: "" },
            otp: { required: "Enter a valid OTP" },
            checkbox: { required: "Please check T&C" },
        },
        errorPlacement: function (b, a) {
            $("#lblError_mobile_contact").html(""),
                $("#lblError_mobile_contact").hide(),
                $("#lblError_reenter_contact").html(""),
                $("#lblError_reenter_contact").hide(),
                $("#lblError_otp_contact").html(""),
                $("#lblError_otp_contact").hide(),
                "radio" === a.prop("type") ? b.insertAfter(a.parent().parent().parent().parent().parent().parent()) : "tel" === a.prop("type") || "checkbox" === a.prop("type") ? b.appendTo(a.parent().parent()) : b.appendTo(a.parent());
        },
        submitHandler: function (a, c) {
            var b = $(a).serialize();
            $.ajax({
                url: "submit_contact_us.php",
                type: "POST",
                data: b,
                success: function (c) {
                    var b = c.split("###");
                    "Success" == b[1] ? ($(a)[0].reset(), location.replace("contact-us-thank-you.php")) : "Failed2" == b[1] ? alert("" + b[2]) : alert("Something went wrong.");
                },
            });
        },
    }),
    jQuery.validator.addMethod(
        "otp_verified2",
        function (a, b) {
            return 1 == $("#otp_verified_contact").val();
        },
        ""
    ),
    $("#Mobile_Number").on("input", function (c) {
        $("#lblError_mobile_contact").html(""), $("#lblError_mobile_contact").hide(), $("#otp").val("");
        var a = $("#Mobile_Number").val(),
            b = $("#secure_token").val();
        10 == a.length
            ? $.ajax({
                  url: "send_otp.php",
                  type: "POST",
                  data: { mobile: a, secure_token: b, type: "contact_us_otp_send" },
                  success: function (b) {
                      console.log(b);
                      var a = b.split("###");
                      if ("Success" == a[0]) {
                          $("#OTP").prop("readonly", !1);
                          var c = $("#Mobile_Number").val();
                         // $("#verified_mobile_number").val("" + c),
                              $(".mobile_div_contact").find(".error").html("");
                              $("#lbl_mobile_contact").html("OTP Sent.");
                              $("#lbl_mobile_contact").show();
                              $(".otp_mobile_div_contact").show();
                              /*setTimeout(function () {
                                  $("#lbl_mobile_contact").hide(),  $(".otp_mobile_div_contact").show();
                              }, 1500);*/
                      } else
                          "Failed2" == a[0]
                              ? alert("" + a[1])
                              : ($("#mobile_error_contatus").html("Something wrong."),
                                $("#mobile_error_contatus").show(),
                                setTimeout(function () {
                                    $("#mobile_error_contatus").hide();
                                }, 1500));
                  },
              })
            : $(".mobile_div_contact").find(".error").text();
    }),
    $("#OTP").on("input", function (e) {
        $("#lblError_mobile_contact").html(""), $("#lblError_mobile_contact").hide(), $("#lblError_reenter_contact").html(""), $("#lblError_reenter_contact").hide(), $("#lblError_otp_contact").html(""), $("#lblError_otp_contact").hide();
        var a = $("#OTP").val(),
            b = $("#Mobile_Number").val(),
            c = $("#secure_token").val();
        if (4 == a.length)
            $.ajax({
                url: "chk_otp.php",
                type: "POST",
                data: { otp: a, mobile: b, secure_token: c, type: "contact_us_otp_check" },
                success: function (b) {
                    var a = b.split("###");
                    "Success" == a[0]
                        ? ($("#otp_verified_contact").val("1"),
                          $("#OTP").attr("readonly", "readonly"),
                          $(".otp_mobile_div_contact").find(".error").hide(),
                          $("#otp_error_contatus").hide(),
                          $("#otp_success").html("OTP Veryfied."),
                          $("#otp_success").show(),
                          $("#hl-form-submit-btn").show())
                        : "Failed2" == a[0]
                        ? alert("" + a[1])
                        : ($("#otp_error_contatus").html("Wrong OTP, Recheck."),
                          $("#otp_error_contatus").show(),
                          setTimeout(function () {
                              $("#otp_error_contatus").hide();
                          }, 6e4));
                },
            });
        else {
            $(".otp_mobile_div_contact").find(".error").html('Wrong OTP');
            $(".otp_mobile_div_contact").find(".error").show();
        }
    }),
    $(".btn_mobile_reenter_contact").click(function () {
        $("#lblError_mobile_contact").html(""),
            $("#lblError_mobile_contact").hide(),
            $(".mobile_div_contact").find(".error").text(""),
            $(".verified_mobile_div_contact").find(".error").text(""),
            $("#Mobile_Number").focus(),
            $("#verified_mobile_number").val(""),
            $(".verified_mobile_div_contact").hide(),
            $("#otp_verified_contact").val(""),
            $("#OTP").val(""),
            $("#otp_error_contatus").html(""),
            $("#otp_error_contatus").hide(),
            $(".mobile_div_contact").show();
    }),
    $("#property_type1, #price1, #location1").change(function () {
        $("#lblError1").html("");
        var a = $("#property_type1").val(),
            b = $("#price1").val(),
            c = $("#location1").val(),
            d = $("#secure_token_branch").val();
        ("" !== a && null != a) || ("" !== b && null != b) || ("" !== c && null != c)
            ? $.ajax({
                  url: "get_auction_property_locator_data.php",
                  type: "POST",
                  data: "type=filter&property_type=" + a + "&price=" + b + "&location=" + c + "&secure_token=" + d,
                  success: function (d) {
                      if (($("#search_result1").empty(), "none" == d)) {
                          var b = '<div class="blStoreItem"><h6>No Result</h6></div>';
                          $("#search_result1").append(b);
                      } else {
                          success_data = JSON.parse(d);
                          for (var a = 0; a < success_data.length; a++) {
                              if ("" === success_data[a].main_image) var c = "image/no_img.jpg";
                              else {
                                  someString_pid_f = success_data[a].property_id.replace(/\//g, "-").replace(/\s/g, "-").toLowerCase();
                                  var c = success_data[a].main_image;
                              }
                              var e = success_data[a].price,
                                  f = Intl.NumberFormat("en-US").format(e),
                                  b =
                                      '<div class="col-sm-4 mt-4" data-add="' +
                                      success_data[a].property_id +
                                      '"> <div class="card blog-card img-hover-zoom"> <img class="card-img-top" src="pfca/' +
                                      c +
                                      '" alt="' +
                                      c +
                                      '"> </div> <div class="card-body mediatext"> <h5>' +
                                      success_data[a].property_name +
                                      '</h5> <p>Property ID <span class="mlproperty">: ' +
                                      success_data[a].property_id +
                                      '</span></p> <p>Location <span class="mlarea">: ' +
                                      success_data[a].city +
                                      '</span></p> <p>Price <span class="mlprice">: <i class="fa fa-rupee"></i> ' +
                                      f +
                                      '</span> </p> <a href="auction-detail/' +
                                      success_data[a].property_id +
                                      '" target="_blank" class="links mt-3">Read More</a> </div> </div>';
                              $("#default_auction_properties").hide(), $("#search_result1").append(b);
                          }
                      }
                  },
              })
            : $("#lblError").html("Select atleast one value.");
    }),
    $("#city1x").change(function () {
        console.log("Hello");
        var a = this.value,
            b = $("#secure_token_branch").val();
        $("#price1").find("option").remove(),
            $("#state1").find("option").remove(),
            $.ajax({
                url: "get_auction_property_locator_data.php",
                type: "POST",
                data: "type=price&city=" + a + "&secure_token=" + b,
                success: function (b) {
                    if (
                        ((success_data = JSON.parse(b)),
                        $("#price1").append(
                            '<option value="1" selected disabled >Market Price</option><option value="500000">Up to 5 Lakhs</option><option value="2000000">5 - 20 Lakhs</option><option value="5000000">20 - 50 Lakhs</option><option value="10000000">50 Lakhs - 1 Cr</option><option value="1cr">Above 1 Cr</option>'
                        ),
                        "y" == success_data.response)
                    ) {
                        var c = '<option value="1" selected disabled >Location</option>';
                        $("#state1").append(c);
                        for (var a = 0; a < success_data.data.length; a++) {
                            var d = '<option value="' + success_data.data[a].state + '">' + success_data.data[a].state + "</option>";
                            $("#state1").append(d);
                        }
                    } else $("#state1").append("<option>No Location Found</option>");
                },
            });
    }),
    $("#price1x").change(function () {
        var a = this.value,
            b = $("#secure_token_branch").val(),
            c = $("#city1").val();
        $("#state1").find("option").remove(),
            $.ajax({
                url: "get_auction_property_locator_data.php",
                type: "POST",
                data: "type=state&price=" + a + "&secure_token=" + b + "&city=" + c,
                success: function (b) {
                    if ("y" == (success_data = JSON.parse(b)).response) {
                        var c = '<option value="1" selected disabled >Location</option>';
                        $("#state1").html(c);
                        for (var a = 0; a < success_data.data.length; a++) {
                            var d = '<option value="' + success_data.data[a].state + '">' + success_data.data[a].state + "</option>";
                            $("#state1").html(d);
                        }
                    } else $("#state1").html("<option>No Location Found</option>");
                },
            });
    }),
    $("#price1x").change(function () {
        $("#lblError1").html("");
        var a = $("#state1").val(),
            b = $("#city1").val(),
            c = $("#price1").val(),
            d = $("#secure_token_branch").val();
        ("" !== a && null != a) || ("" !== b && null != b) || ("" !== c && null != c)
            ? $.ajax({
                  url: "get_auction_property_locator_data.php",
                  type: "POST",
                  data: "type=search&state=" + a + "&city=" + b + "&price=" + c + "&secure_token=" + d,
                  success: function (d) {
                      if (($("#search_result1").empty(), "none" == d)) {
                          var b = '<div class="blStoreItem"><h6>No Result</h6></div>';
                          $("#search_result1").append(b);
                      } else {
                          success_data = JSON.parse(d);
                          for (var a = 0; a < success_data.length; a++) {
                              if ("" === success_data[a].main_image) var c = "image/no_img.jpg";
                              else {
                                  someString_pid_f = success_data[a].property_id.replace(/\//g, "-").replace(/\s/g, "-").toLowerCase();
                                  var c = success_data[a].main_image;
                              }
                              var e = success_data[a].price,
                                  f = Intl.NumberFormat("en-US").format(e),
                                  b =
                                      '<div class="col-sm-4 mt-4" data-add="' +
                                      success_data[a].property_id +
                                      '"> <div class="card blog-card img-hover-zoom"> <img class="card-img-top" src="pfca/' +
                                      c +
                                      '" alt="' +
                                      c +
                                      '"> </div> <div class="card-body mediatext"> <h5>' +
                                      success_data[a].property_name +
                                      '</h5> <p>Property ID <span class="mlproperty">: ' +
                                      success_data[a].property_id +
                                      '</span></p> <p>Location <span class="mlarea">: ' +
                                      success_data[a].city +
                                      '</span></p> <p>Price <span class="mlprice">: <i class="fa fa-rupee"></i> ' +
                                      f +
                                      '</span> </p> <a href="auction-detail-list.php?property_id=' +
                                      success_data[a].property_id +
                                      '" target="_blank" class="links mt-3">Read More</a> </div> </div>';
                              $("#search_result1").append(b);
                          }
                      }
                  },
              })
            : $("#lblError").html("Select atleast one value.");
    }),
    $("#search_btn1x").click(function () {
        $("#lblError1").html("");
        var a = $("#state1").val(),
            b = $("#city1").val(),
            c = $("#price1").val(),
            d = $("#secure_token_branch").val();
        ("" !== a && null != a) || ("" !== b && null != b) || ("" !== c && null != c)
            ? $.ajax({
                  url: "get_auction_property_locator_data.php",
                  type: "POST",
                  data: "type=search&state=" + a + "&city=" + b + "&price=" + c + "&secure_token=" + d,
                  success: function (d) {
                      if (($("#search_result1").empty(), "none" == d)) {
                          var b = '<div class="blStoreItem"><h6>No Result</h6></div>';
                          $("#search_result1").append(b);
                      } else {
                          success_data = JSON.parse(d);
                          for (var a = 0; a < success_data.length; a++) {
                              if ("" === success_data[a].main_image) var c = "image/no_img.jpg";
                              else {
                                  someString_pid_f = success_data[a].property_id.replace(/\//g, "-").replace(/\s/g, "-").toLowerCase();
                                  var c = success_data[a].main_image;
                              }
                              var e = success_data[a].price,
                                  f = Intl.NumberFormat("en-US").format(e),
                                  b =
                                      '<div class="col-sm-4 mt-4" data-add="' +
                                      success_data[a].property_id +
                                      '"> <div class="card blog-card img-hover-zoom"> <img class="card-img-top" src="pfca/' +
                                      c +
                                      '" alt="' +
                                      c +
                                      '"> </div> <div class="card-body mediatext"> <h5>' +
                                      success_data[a].property_name +
                                      '</h5> <p>Property ID <span class="mlproperty">: ' +
                                      success_data[a].property_id +
                                      '</span></p> <p>Location <span class="mlarea">: ' +
                                      success_data[a].city +
                                      '</span></p> <p>Price <span class="mlprice">: <i class="fa fa-rupee"></i> ' +
                                      f +
                                      '</span> </p> <a href="auction-detail-list.php?property_id=' +
                                      success_data[a].property_id +
                                      '" target="_blank" class="links mt-3">Read More</a> </div> </div>';
                              $("#search_result1").append(b);
                          }
                      }
                  },
              })
            : $("#lblError").html("Select atleast one value.");
    }),
    $("#state_auction_notice").change(function () {
        var a = this.value,
            b = $("#secure_token_branch").val();
        $("#city").find("option").remove(),
            $.ajax({
                url: "get_auction_notice_data.php",
                type: "POST",
                data: "type=city&state=" + a + "&secure_token=" + b,
                success: function (b) {
                    (success_data = JSON.parse(b)), $("#city").append('<option value="1" selected disabled >City</option>');
                    for (var a = 0; a < success_data.length; a++) {
                        var c = '<option value="' + success_data[a].city + '">' + success_data[a].city + "</option>";
                        $("#city").append(c);
                    }
                },
            });
    }),
    
    $("form#branch_locator_form #city").change(function () {
        // var state = $("#state").val();
        // var city = $("#city").val();
        var city_S = $('option:selected', this).attr('slug');
        // console.log(city_S);
        // var formData = {
        //     "state":state,
        //     "city":city,
        //     "type":"get_branch_address"
        // };
        // $.ajax({
        //     url: "branch_locator/get_branch_address_data.php",
        //     type: "POST",
        //     data: formData,
        //     success: function (response) {
        //         result = JSON.parse(response);
        //          console.log(response)
        //         if(result['status'] == 'success')
        //         {
        //             var html_data = '';
        //             console.log(result['data'])
        //             $.each(result['data'], function (key, val) {
        //                     html_data += '<h6>'+val['branch_title']+' - '+val['branch_city']+'</h6>'+
        //                     '<p><strong>Address:</strong>'+val['branch_address']+'</p>'+
        //                     '<p><strong>Contact Number:</strong> 1800 266 3204 (Toll Free)</p>'+
        //                     '<p><strong>Timing:</strong> 10 am Ã¢â‚¬â€œ 6:30 pm Monday Ã¢â‚¬â€œ Saturday (Closed on 1st and 2nd Saturday, Sundays, and public Holidays)</p>';
        //                     $('.search_branch_div').html(html_data)
        //             });
        //         }
        //     }
        // });
 
        window.location.href = "branch-locator/home-loan-in-"+city_S;

        // $('#search_btn').click();
    });
    
    $("#search_btn_auction_notice").click(function () {
        $("#lblError").html("");
        var a = $("#state_auction_notice").val(),
            b = $("#city").val(),
            c = $("#secure_token_branch").val();
        ("" !== a && null != a) || ("" !== b && null != b)
            ? $.ajax({
                  url: "get_auction_notice_data.php",
                  type: "POST",
                  data: "type=search&state=" + a + "&city=" + b + "&secure_token=" + c,
                  success: function (c) {
                      if (($("#xyz").empty(), "none" == c)) {
                          var b = '<div class="blStoreItem"><h6>No Result</h6></div>';
                          $("#xyz").append(b);
                      } else {
                          success_data = JSON.parse(c);
                          for (var a = 0; a < success_data.length; a++) {
                              $(".blStore").removeClass("d-none");
                              var b = '<li> <a href="pfca/auction_images/pdf/' + success_data[a].pdf_url + '" target="_blank"> <img src="images/pdf.png" alt="PDF download" width="" height="">' + success_data[a].name + " </a> </li>";
                              $("#xyz").append(b), $("#bl_links").removeClass("d-none");
                          }
                      }
                  },
              })
            : $("#xyz").html("<div class='text-center'><span id=lblError>Please select atleast one state and city.</span></div>");
    }),
    $("#state").change(function () {
        console.log("ok");
        var a = this.value,
            b = $("#secure_token_branch").val();
        $("#city").find("option").remove(),
            $.ajax({
                url: "../get_branch_locator_data.php",
                type: "POST",
                data: "type=city&state=" + a + "&secure_token=" + b,
                success: function (b) {
                    (success_data = JSON.parse(b)), $("#city").append('<option value="" selected disabled >Select Branch</option>');
                    for (var a = 0; a < success_data.length; a++) {
                        // var c = '<option value="' + success_data[a].city + '">' + success_data[a].city + "</option>";
                        var c = '<option value="' + success_data[a].city + '" slug="'+ success_data[a].city_slug +'">' + success_data[a].city + "</option>";
                        $("#city").append(c);
                    }
                },
            });
    }),
     $("#connectorstate").change(function () {
        console.log("ok");
        var a = this.value,
            b = $("#secure_token_branch").val();
        $("#city").find("option").remove(),
            $.ajax({
                url: "../get_branch_locator_data.php",
                type: "POST",
                data: "type=city&state=" + a + "&secure_token=" + b,
                success: function (b) {
                    (success_data = JSON.parse(b)), $("#city").append('<option value="" selected disabled >City</option>');
                    for (var a = 0; a < success_data.length; a++) {
                        var c = '<option value="' + success_data[a].city + '">' + success_data[a].city + "</option>";
                        $("#city").append(c);
                    }
                },
            });
    }),
    $("#search_btn").click(function () {
        $("#lblError").html("");
        var a = $("#state").val(),
            b = $("#city").val(),
            c = $("#secure_token_branch").val();
        ("" !== a && null != a) || ("" !== b && null != b)
            ? $.ajax({
                  url: "../get_branch_locator_data.php",
                  type: "POST",
                  data: "type=search&state=" + a + "&city=" + b + "&secure_token=" + c,
                  success: function (c) {
                      if (($("#search_result").empty(), "none" == c)) {
                          var b = '<div class="blStoreItem"><h6>No Result</h6></div>';
                          $("#search_result").append(b);
                      } else {
                          success_data = JSON.parse(c);
                          for (var a = 0; a < success_data.length; a++) {
                              $(".blStore").removeClass("d-none");
                              var b =
                                  '<div style="cursor: pointer;" class="blStoreItem search_branch_div" data-add="' +
                                  success_data[a].branch_address +
                                  '" ><h6>' +
                                  success_data[a].branch_title + " - "+ success_data[a].branch +
                                  "</h6><p><strong>Address:</strong> " +
                                  success_data[a].branch_address +
                                  "</p><p><strong>Contact Number:</strong> 1800 266 3204 (Toll Free)</p><p><strong>Timing:</strong> 10 am \u2013 6 pm</p></div>";
                              $("#search_result").append(b), $("#bl_links").removeClass("d-none");
                          }
                      }
                  },
              })
            : $("#lblError").html("Select atleast one value.");
    }),
    $("#search_btn_pincode").click(function () {
        $("#lblError").html("");
        var a = $("#pincode").val(),
            b = $("#secure_token_branch").val();
        "" !== a && null != a
            ? $.ajax({
                  url: "get_pincode_data.php",
                  type: "POST",
                  data: "type=search&pincode=" + a + "&secure_token=" + b,
                  success: function (c) {
                      if (($("#tabledata").hide(), $("#search_result").empty(), $("#search_result_error").empty(), "none" == c)) {
                          var b = '<div class="blStoreItem"><h6>This is non serviceable location</h6></div>';
                          $("#search_result_error").append(b);
                      } else {
                          success_data = JSON.parse(c);
                          for (var a = 0; a < success_data.length; a++) {
                              var b =
                                  "<tr><td>" +
                                  success_data[a].pi_zone +
                                  "</td><td>" +
                                  success_data[a].pi_region +
                                  "</td><td>" +
                                  success_data[a].pi_branch +
                                  "</td><td>" +
                                  success_data[a].pi_district_code +
                                  "</td><td>" +
                                  success_data[a].pi_district_name +
                                  "</td><td>" +
                                  success_data[a].pi_town_code +
                                  "</td><td>" +
                                  success_data[a].pi_town_name +
                                  "</td><td>" +
                                  success_data[a].pi_pincode +
                                  "</td></tr>";
                              $("#search_result").append(b);
                          }
                          $("#tabledata").show();
                      }
                  },
              })
            : $("#lblError").html("Enter a Valid Pincode.");
    }),
    $(document).ready(function () {
        $(".search_branch_div").click(function (a) {});
    }),
    $(document).on("click", ".search_branch_div", function (a) {}),
    $(".otp_text").keyup(function (b) {
        if ("digit-4" == $(this).attr("id")) b.preventDefault();
        else {
            var c = $(this).val();
            if (/^[0-9]{1}$/.test(c)) {
                var a = $(this).closest("form").find(":input");
                a.eq(a.index(this) + 1).prop("readonly", !1), a.eq(a.index(this) + 1).focus();
            }
        }
    }),
    $(".otp_text").keyup(function (a) {
        (8 == a.which || 46 == a.which) && $(this).prev("input").focus();
    });