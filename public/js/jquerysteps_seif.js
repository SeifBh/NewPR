

    function adjustIframeHeight() {
        var $body = $('body'),
            $iframe = $body.data('iframe.fv');
        if ($iframe) {
            // Adjust the height of iframe
            $iframe.height($body.height());
        }
    }
    $("#multiphase").steps({
        headerTag: "h2",
        bodyTag: "section",
        saveState: true,
        onStepChanged: function (e, currentIndex, priorIndex) {
            // You don't need to care about it
            // It is for the specific demo
            adjustIframeHeight();
        },
        // Triggered when clicking the Previous/Next buttons
         


        onStepChanging: function (e, currentIndex, newIndex) {
            $('#customtt td').each(function() {
    if ($(this).val() == 'undefined'){
        alert('removed');
    }
 });

 $newIcount = $iCount++;

            var fv = $('#multiphase').data('formValidation'), // FormValidation instance
 newp = $("#emailadress").val();
 //alert('emailadress.val = '+ newp);

                       $('section').append('<input  type="hidden" value="'+newp+'" id="testhideninput'+$newIcount+'">');
//alert('id input hidden = testhideninput'+newIcount);

                      mailA = $('#testhideninput0').val();
                     // alert('mailA = '+mailA);









                $container = $('#multiphase').find('section[data-step="' + currentIndex + '"]');


            // Validate the container
            fv.validateContainer($container);
            
            
            var isValidStep = fv.isValidContainer($container);
            if (isValidStep === false || isValidStep === null) {
                // Do not jump to the next step
                return false;

            }
            // $('#customtt tr:first').after('<tr><td><center><b>'+mailA+'</b></center></td><td><center><b>'+mailA+'</b></center></td></tr>');


            return true;
        },
        // Triggered when clicking the Finish button
        onFinishing: function (e, currentIndex) {


            var fv = $('#multiphase').data('formValidation'),
                $container = $('#multiphase').find('section[data-step="' + currentIndex + '"]');

            // Validate the last step container
            fv.validateContainer($container);

            var isValidStep = fv.isValidContainer($container);
            if (isValidStep === false || isValidStep === null) {

                return false;
            }

            return true;
        },
        onFinished: function (e, currentIndex) {


            // Uncomment the following line to submit the form using the defaultSubmit() method
            $('#multiphase').formValidation('defaultSubmit');
    $('[name="countrySelectBox"]').change(function() {
            $('#multiphase').formValidation('revalidateField', 'postcode');
        });

        $('[name="countrySelectBox"]').change(function() {
            $('#multiphase').formValidation('revalidateField', 'contactnumverf');
        });

            // For testing purpose
            $('#welcomeModal').modal("show");
        }
    }).formValidation({
        excluded: ':disabled',
        message: 'This value is not valid',
        container: 'tooltip',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            //last name validation  
            surname: {
                
                validators: {
                    notEmpty: {
                        message: 'The Surname is required and cannot be empty'
                    }
                }
            },

            //first name validation
                contactnumverf: {
                    
                    validators: {
                         notEmpty: {
                              message: 'The Contact number is required and cannot be empty'
                          },
                        phone: {
                            country: 'countrySelectBox',
                            message: 'The value is not valid %s phone number'
                        },
                        regexp : {
                            regexp : /^ (.+) |[0-9]{1,45}$/i,
                            message:'HEEE',
                        }


                    }
                },

                housenumname: {
                    
                    validators: {
                         notEmpty: {
                              message: 'The House number is required and cannot be empty'
                          },
                                                  numeric: {
                            message: 'The value is not a Numeric Number ',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: '.'
                        }



                    }
                },


                insnumber: {
                    
                    validators: {
                         notEmpty: {
                              message: 'The National Insurance Number is required and cannot be empty'
                          },


                                            regexp: {
                        regexp: /^[A-CEGHJ-PR-TW-Z]{1}[A-CEGHJ-NPR-TW-Z]{1}[0-9]{6}[A-D]{1}$/i,
                        message: 'Invalid NINO',
                                                }       

                    }
                },
                numberpeopbook: {
                    
                    validators: {
                         notEmpty: {
                              message: 'Number of people in booking is required and cannot be empty'
                          },
                        numeric: {
                            message: 'The value is not a Numeric Number ',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: '.'
                        }
                    }
                },
                costholiday: {
                    
                    validators: {
                         notEmpty: {
                              message: 'Costs is a required and cannot be empty'
                          },
                        numeric: {
                            message: 'The value is not a Numeric Number ',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: '.'
                        }
                    }
                },
            //validation of Parent's details step start
            //last name validation  
            birthdate: {
                
                validators: {
                    notEmpty: {
                        message: 'The Date of birth is required and cannot be empty'
                    }
                }
            },
          /*  region: {
                
                validators: {
                    notEmpty: {
                        message: 'Region is required and cannot be empty'
                    }
                }
            },*/
            cityf: {
                
                validators: {
                    notEmpty: {
                        message: 'City is required and cannot be empty'
                    }
                }
            },
            yourresort: {
                
                validators: {
                    notEmpty: {
                        message: 'Departure date (to your resort) is required and cannot be empty'
                    }
                }
            },
            leftyoursort: {
                
                validators: {
                    notEmpty: {
                        message: 'Return date (left resort): is required and cannot be empty'
                    },
                        date:{
                        min:"yourresort",
                        message : "This date should be greater then the departure date"
                    }
                }
            },
            //first name validation
            firstname: {
                
                validators: {
                    notEmpty: {
                        message: 'The First Name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The First Name must be more than 7 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[A-Z]+$/i,
                        message: 'The First Name can only consist of alphabetical characters'
                    }
                }
            },

            // Validation for Reference details starts
            //School reference name
          /*  housename: {
                
                validators: {
                    notEmpty: {
                        message: 'The House name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The House number/name must be more than 3 and less than 30 characters long'
                    },

                }
            },*/
            //School reference phone
            adresse1: {
                
                validators: {
                    notEmpty: {
                        message: 'The Adress line 1 is required and cannot be empty'
                    }
                }
            },
            adresse2: {
                
                validators: {
                    notEmpty: {
                        message: 'The Address line 2 is required and cannot be empty'
                    }
                }
            },

            AddPeopFirstname0: {
                
                validators: {
                    notEmpty: {
                        message: 'the firstname is required and cannot be empty'
                    }
                }
            },
             AddPeopFirstname1: {
                
                validators: {
                    notEmpty: {
                        message: 'the firstname is required and cannot be empty'
                    }
                }
            },

        datestart: {
            validators: {
                                    notEmpty: {
                        message: 'Date started is required and cannot be empty'
                    },
                date: {
                    max: 'leftyoursort',
                    min: 'yourresort'
                }
            }
        },
        confirmemailadress: {
                          

            validators: {
                     notEmpty: {
                        message: 'Confirm Email Address is required and cannot be empty'
                    },
                identical: {
                    field: 'emailadress',
                    message: 'The Email and its confirm are not the same'
                }
            }
        },
                        postcode: {
                                                    

                    validators: {
                                           notEmpty: {
                        message: 'Post code is required and cannot be empty'
                    },
                        zipCode: {
                            country: 'countrySelectBox',
                            message: 'The value is not valid %s postal code'
                        }
                    }
                },
            AddPeopEmailAddr0: {
                
                validators: {
                    notEmpty: {
                        message: 'The E-Mail ID is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /[a-zA-Z0-9]+(?:(\.|_)[A-Za-z0-9!#$%&'*+\/=?^`{|}~-]+)*@(?!([a-zA-Z0-9]*\.[a-zA-Z0-9]*\.[a-zA-Z0-9]*\.))(?:[A-Za-z0-9](?:[a-zA-Z0-9-]*[A-Za-z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?/g,
                        message: 'The E-Mail ID is not a valid E-Mail'
                    }
                }
            },

            AddPeopEmailAddr1: {
                
                validators: {
                    notEmpty: {
                        message: 'The E-Mail ID is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /[a-zA-Z0-9]+(?:(\.|_)[A-Za-z0-9!#$%&'*+\/=?^`{|}~-]+)*@(?!([a-zA-Z0-9]*\.[a-zA-Z0-9]*\.[a-zA-Z0-9]*\.))(?:[A-Za-z0-9](?:[a-zA-Z0-9-]*[A-Za-z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?/g,
                        message: 'The E-Mail ID is not a valid E-Mail'
                    }
                }
            },


            emailadress: {
                
                validators: {
                    notEmpty: {
                        message: 'The E-Mail ID is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /[a-zA-Z0-9]+(?:(\.|_)[A-Za-z0-9!#$%&'*+\/=?^`{|}~-]+)*@(?!([a-zA-Z0-9]*\.[a-zA-Z0-9]*\.[a-zA-Z0-9]*\.))(?:[A-Za-z0-9](?:[a-zA-Z0-9-]*[A-Za-z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?/g,
                        message: 'The E-Mail ID is not a valid E-Mail'
                    }
                }
            }

        }

    })

});


