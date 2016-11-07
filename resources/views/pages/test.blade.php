<html>
<head>

        <link rel="stylesheet" href="/assets/css/style.css">

            <link rel="stylesheet" href="/css/register.css">
        <link rel="stylesheet" href="/assets/css/style.css">

            <link rel="stylesheet" href="/css/test.css">

</style>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
    <script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://formvalidation.io/vendor/jquery.steps/js/jquery.steps.min.js"></script>

    <link rel="stylesheet" href="/css/formvalidation2.css" />

    <link rel="stylesheet" type="text/css" href="http://formvalidation.io/vendor/formvalidation/css/formValidation.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.1/css/formValidation.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.1/js/formValidation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.1/js/framework/bootstrap.min.js"></script>
<script src="http://formvalidation.io/vendor/jquery.steps/js/jquery.steps.min.js"></script>
</head>
<body>

<div id="wrapper">
<!-- main container div-->
<div id="container" class="container">

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif


    <div class="row">
        <div id="maincontent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div id="" class="col-lg-12" style="margin-top:15px;">
                    <form id="multiphase" role="form" class="form-horizontal" action="/setQuestion" method="get" enctype="multipart/form-data">

<?php $i = 0; ?>

@foreach ($questions as $question)

<h2>Welcome to The Accident Guys</h2>


<section data-step="<?php echo $i  ?>" id="p<?php echo $i  ?>">
    <div class="col-sm-12" id="headersection" >
        <h4><b>Q.<?php echo $i  ?> : {{ $question->content }} </b></h4>
    </div>
<div class="container">
    <label>	Question_ID<input type="text" name="idquestion2" id="idquestion2" value="{{ $question->id }}"/></label>	

    <div class="col-md-12 col-lg-12" style="padding-top:50px;">
    
    <div style="background:gold">
    	<ul>
    		<li name="idquestion" id="idquestion" value="{{ $question->id }}">{{ $question->id }}
    		</li>
    		<li>{{ $question->content }}</li>
    		<li>{{ $question->a1 }}</li>
    		<li>{{ $question->a2 }}</li>
    		<li>{{ $question->a3 }}</li>
    		<li>{{ $question->a4 }}</li>
    		<li>{{ $question->a5 }}</li>
    		<li>{{ $question->a6 }}</li>
    		<li>{{ $question->a7 }}</li>
    		<li>{{ $question->a8 }}</li>
    	</ul>
    	<br>
    </div>
   
    </div>


</div>
</section>
<?php  $i++ ?>

 @endforeach
 <h2>Salut</h2>
<section data-step="3" >
    <div class="col-sm-12" id="headersection" >
        <h4><b>Q.1</b></h4>
    </div>
    Salut 
</section>





                        <!-- end of wizard-->
                    </form>
                    <!-- end of form-->
                </div>
            </div>
            <!-- end of row-->

        </div>
    </div>
    <div class="row hidden-print">
        <div id="footer" class="col-lg-12"></div>
    </div>
</div>
</div>
</body>
<script type="text/javascript">
    $(document).ready(function () {

function setValues() {
    window.document.getElementById("idquestion2").value = "12";
}

                setValues();




    $("#multiphase").steps({
        headerTag: "h2",
        bodyTag: "section",
        saveState: true,
        onStepChanged: function (e, currentIndex, priorIndex) {
            // You don't need to care about it
            // It is for the specific demo
  
    
        },

        // Triggered when clicking the Previous/Next buttons
        onStepChanging: function (e, currentIndex, newIndex) {
                                          var idquestion = $("#idquestion{{ $question->id }}").val();

alert(idquestion);
 e.preventDefault();
            $.ajax({
            type: "GET",
            url: '/setQuestion',
            data: {idquestion:$('#idquestion{{ $question->id }}').val()},

            cache: false,
            success: function(data){
               console.log(idquestion);

            }
            });


                             
                     // alert(idquestion2);

            var fv = $('#multiphase').data('formValidation'), // FormValidation instance
                // The current step container
                $container = $('#multiphase').find('section[data-step="' + currentIndex + '"]');

            // Validate the container
            fv.validateContainer($container);

            var isValidStep = fv.isValidContainer($container);
            if (isValidStep === false || isValidStep === null) {
                // Do not jump to the next step
                return false;
            }

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

            // For testing purpose
            $('#welcomeModal').modal("show");
        }
    }).formValidation({
        excluded: ':disabled',
        message: 'This value is not valid',
        container: 'tooltip',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok-circle',
            invalid: 'glyphicon glyphicon-remove-circle',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {




            housename: {
                validators: {
                    notEmpty: {
                        message: 'The House Name is required and cannot be empty'
                    }
                }
            },
            flatNumber: {
                validators: {
                    notEmpty: {
                        message: 'The Flat Number is required and cannot be empty'
                    }
                }
            },

            street: {
                validators: {
                    notEmpty: {
                        message: 'The Street name is required and cannot be empty'
                    }
                }
            },

            town: {
                validators: {
                    notEmpty: {
                        message: 'The Town is required and cannot be empty'
                    }
                }
            },

            city: {
                validators: {
                    notEmpty: {
                        message: 'The City is required and cannot be empty'
                    }
                }
            },


            country: {
                validators: {
                    notEmpty: {
                        message: 'The Country is required and cannot be empty'
                    }
                }
            },


            postcode: {
                validators: {
                    notEmpty: {
                        message: 'The Post Code is required and cannot be empty'
                    }
                }
            },


            //last name validation  
            lastname: {
                validators: {
                    notEmpty: {
                        message: 'The Last Name is required and cannot be empty'
                    }
                }
            },

            title_user: {

                validators: {
                    notEmpty: {
                        message: 'The title is required'
                    }
                }
            },

                previsouly: {
                    err: '#alertDayMessage',
                    validators: {
                        notEmpty: {
                            message: 'Please choose at least one checkbox'
                        }
                    }
                },
                born: {
                    validators: {
                        notEmpty: {
                            message: 'Please select your country.'
                        }
                    }
                },

                resident: {
                    validators: {
                        notEmpty: {
                            message: 'Please select your resident.'
                        }
                    }
                },
                country: {
                    validators: {
                        notEmpty: {
                            message: 'Please select your country.'
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
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The date is not a valid'
                    }
                }
            },
            //validation of Parent's details step start
            //last name validation  
            lastname: {
                container: 'popover',
                validators: {
                    notEmpty: {
                        message: 'The Last Name is required and cannot be empty'
                    }
                }
            },

            middlename: {
                container: 'popover',
                validators: {
                    notEmpty: {
                        message: 'The Middle Name is required and cannot be empty'
                    }
                }
            },

            //first name validation
            firstname: {
                container: 'popover',
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

            rd_schoolrefemail: {
                container: 'popover',
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
        }

    })

});
</script>
<script type="text/javascript">
    $("#wizard").steps({
    headerTag: "h2",
    bodyTag: "section",
    saveState: true,
});
</script>
</html>
