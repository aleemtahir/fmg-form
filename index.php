<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/style.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />

    <title></title>
    <style type="text/css">
        /* This only changes this particular animation duration */
        /*.animate__animated.animate__bounce {
          --animate-duration: 5s;
        }*/

        /* This changes all the animations globaly */
        /*:root {
          --animate-duration: 1500ms;
          --animate-delay: 0.9s;
        }*/
    </style>
</head>
<body>
    <div class="card u-box-shadow-sm bg-white mb-3">
        <div class="card u-box-shadow-sm bg-white mb-3">
            <div class="card-body">
                <section class="pb-4">
                    <div class="tabPanel-widget">
                        <label for="tab-1" tabindex="0"></label>
                        <input id="tab-1" type="radio" name="tabs" checked="true" aria-hidden="true">
                        <h2>For Seller</h2>
                        <div id="price-entry1" class="price-entry ">
                                <div class="my-3">
                                    <form method="POST" id="sellerForm" class="col-xl-7 col-lg-8 col-md-9 col-sm-10 mx-auto">
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label for="inputName">Name</label>
                                              <input type="text" class="form-control" id="inputName" placeholder="Name" >
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="inputEmail">Email</label>
                                              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Proeprty Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="">
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress2">Address </label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="1234 Main St">
                                          </div>
                                          <div class="form-row">
                                            <div class="form-group col-md-4">
                                              <label for="inputCity">City</label>
                                              <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label for="inputState">State</label>
                                              <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                              </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label for="inputPhone">Phone</label>
                                              <input type="text" class="form-control" id="inputPhone">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="form-check-label d-block" for="bussinessType1">Ownership Type</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="bussinessType1" name="bussinessType" class="custom-control-input">
                                              <label class="custom-control-label" for="bussinessType1">Sole Proprietor</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="bussinessType2" name="bussinessType" class="custom-control-input">
                                              <label class="custom-control-label" for="bussinessType2">Partner</label>
                                            </div>
                                          </div>
                                          <div class="form-row">
                                              <div class="form-group col-md-6">
                                                <label for="inputDuration">How long have you owned the property?</label>
                                                <input type="number" class="form-control" id="inputDuration" placeholder="5 years">
                                              </div>
                                              <div class="form-group col-md-6">
                                                  <label for="inputState">What is the condition of property?</label>
                                                  <select id="inputState" class="form-control">
                                                    <option class="">Select</option>
                                                    <option value="poor">Poor</option>
                                                    <option value="normal">Normal</option>
                                                    <option value="good">Good</option>
                                                    <option value="excellent">Excellent</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputTotalUnits">Total Units</label>
                                                <input type="number" class="form-control" id="inputTotalUnits" placeholder="5" onchange="calculateVacancyRate()">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputOccupiedUnits">Occupied Units</label>
                                                <input type="number" class="form-control" id="inputOccupiedUnits" placeholder="2" onchange="calculateVacancyRate()">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                                <label for="inputMonthyRent">Average Monthy Rent</label>
                                                <input type="number" class="form-control" id="inputMonthyRent" placeholder="$" onchange="calculateIncome(this)">
                                          </div>
                                          <div class="form-row">
                                              <div class="form-group col-md-6">
                                                    <label class="d-block">Does property has loan on it?</label>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                      <input type="radio" id="hasLoan1" name="hasLoan" class="custom-control-input">
                                                      <label class="custom-control-label" for="hasLoan1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                      <input type="radio" id="hasLoan2" name="hasLoan" class="custom-control-input">
                                                      <label class="custom-control-label" for="hasLoan2">No</label>
                                                    </div>
                                              </div>
                                              <div class="form-group col-md-6 ">
                                                    <label for="inputLoanAmount">Loan Amount</label>
                                                    <input type="number" class="form-control" id="inputLoanAmount" placeholder="$">
                                              </div>
                                          </div>
                                          <div class="form-row">
                                              <div class="form-group col-md-6">
                                                    <label class="d-block">Are you currently on mortgage?</label>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                      <input type="radio" id="onMortgage1" name="onMortgage" class="custom-control-input">
                                                      <label class="custom-control-label" for="onMortgage1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                      <input type="radio" id="onMortgage2" name="onMortgage" class="custom-control-input">
                                                      <label class="custom-control-label" for="onMortgage2">No</label>
                                                    </div>
                                              </div>
                                              <div class="form-group col-md-6">
                                                    <label for="inputMortgageAmount">Mortgage Amount</label>
                                                    <input type="number" class="form-control" id="inputMortgageAmount" placeholder="$" onchange="calculateMortgage(this)">
                                              </div>
                                          </div>
                                          <div class="form-row">
                                              <div class="form-group col-md-6">
                                                    <label class="d-block">Are you currently paying taxes?</label>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                      <input type="radio" id="payTax1" name="payTax" class="custom-control-input">
                                                      <label class="custom-control-label" for="payTax1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                      <input type="radio" id="payTax2" name="payTax" class="custom-control-input">
                                                      <label class="custom-control-label" for="payTax2">No</label>
                                                    </div>
                                              </div>
                                              <div class="form-group col-md-6">
                                                    <label for="inputTaxAmount">Tax Amount</label>
                                                    <input type="number" class="form-control" id="inputTaxAmount" placeholder="$">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                                <label for="inputWhySelling">What prompted you to consider selling?</label>
                                                <textarea class="form-control" id="inputWhySelling"></textarea>
                                          </div>
                                          
                                          <div class="form-row">
                                              <!-- <div class="form-group col-md-6">
                                                  <label for="inputCashflow">How is your cashflow?</label>
                                                  <select id="inputCashflow" class="form-control">
                                                    <option class="">Select</option>
                                                    <option value="positive">Positive</option>
                                                    <option value="negative">Negative</option>
                                                  </select>
                                              </div> -->
                                              <div class="form-group col-md-6">
                                                  <label for="inputDocumentAvailable">Do you have any income/expense documents available?</label>
                                                  <select id="inputDocumentAvailable" class="form-control">
                                                    <option class="">Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                  </select>
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="form-group col-md-6">
                                                    <label for="inputLeastPrice">Least Selling Price</label>
                                                    <input type="number" class="form-control" id="inputLeastPrice" placeholder="$">
                                              </div>
                                              <div class="form-group col-md-6">
                                                  <label for="inputCovidImpact">Has your property been impacted by the Covid-19 crisis?</label>
                                                  <select id="inputCovidImpact" class="form-control">
                                                    <option class="">Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                  </select>
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="form-group col-md-4">
                                                    <label for="inputIncome">Income</label>
                                                    <input type="number" class="form-control" id="inputIncome" placeholder="$" disabled="">
                                              </div>
                                              <div class="form-group col-md-4">
                                                  <label for="inputOperatingExpenses">Operating Expenses</label>
                                                    <input type="number" class="form-control" id="inputOperatingExpenses" placeholder="$" onchange="calculateCF()">
                                              </div>
                                              <div class="form-group col-md-4">
                                                  <label for="inputDebtService">Debt Service</label>
                                                    <input type="number" class="form-control" id="inputDebtService" placeholder="$" disabled="">
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="form-group col-md-4">
                                                    <label for="inputCashflow">Cash Flow</label>
                                                    <input type="number" class="form-control" id="inputCashflow" placeholder="$" disabled="">
                                              </div>
                                              <div class="form-group col-md-4">
                                                  <label for="inputGrossIncome">Gross Income</label>
                                                    <input type="number" class="form-control" id="inputGrossIncome" placeholder="$" onchange="calculateEGI()">
                                              </div>
                                              <div class="form-group col-md-4">
                                                  <label for="inputVacancyRate">Vacancy Rate</label>
                                                    <input type="number" class="form-control" id="inputVacancyRate" placeholder="$" disabled="">
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="form-group col-md-4">
                                                    <label for="inputEGrossIncome">Effective Gross Income</label>
                                                    <input type="number" class="form-control" id="inputEGrossIncome" placeholder="$" disabled="">
                                              </div>
                                              <div class="form-group col-md-4">
                                                  <label for="inputNOI">Net Operating Income</label>
                                                    <input type="number" class="form-control" id="inputNOI" placeholder="$" disabled="">
                                              </div>
                                              <div class="form-group col-md-4">
                                                  <label for="inputACF">Annual Cash Flow</label>
                                                    <input type="number" class="form-control" id="inputACF" placeholder="$" disabled="">
                                              </div>
                                          </div>

                                          <button id="submit1" type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                        </div>
                        <label for="tab-2" tabindex="0"></label>
                        <input id="tab-2" type="radio" name="tabs" aria-hidden="true">
                        <h2>For Buyer</h2>
                        <div id="price-entry2" class="price-entry">
                                <div class="my-3">
                                    <form class="col-xl-7 col-lg-8 col-md-9 col-sm-10 mx-auto">
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label for="inputBName">Name</label>
                                              <input type="text" class="form-control" id="inputBName" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="inputBEmail">Email</label>
                                              <input type="email" class="form-control" id="inputBEmail" placeholder="Email">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="inputABddress">Address</label>
                                            <input type="text" class="form-control" id="inputBAddress" placeholder="1234 Main St">
                                          </div>
                                          <!-- <div class="form-group">
                                            <label for="inputAddress2">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                          </div> -->
                                          <div class="form-row">
                                            <div class="form-group col-md-4">
                                              <label for="inputCBity">City</label>
                                              <input type="text" class="form-control" id="inputBCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label for="inputBState">State</label>
                                              <select id="inputBState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                              </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label for="inputBPhone">Phone</label>
                                              <input type="text" class="form-control" id="inputBPhone">
                                            </div>
                                          </div>
                                          
                                          <div class="form-row">
                                              <div class="form-group col-md-12">
                                                <label for="inputBDuration">What types of properties are you looking for ?</label>
                                                <input type="text" class="form-control" id="inputBDuration" placeholder="House, Apartment or Land">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="form-check-label d-block" for="paymentMethod1">What payment method would you use?</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="paymentMethod1" name="paymentMethod" class="custom-control-input">
                                              <label class="custom-control-label" for="paymentMethod1">Cash</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="paymentMethod2" name="paymentMethod" class="custom-control-input">
                                              <label class="custom-control-label" for="paymentMethod2">Bank Financing</label>
                                            </div>
                                          </div>
                                          <!-- <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputTotalUnits">Total Units</label>
                                                <input type="number" class="form-control" id="inputTotalUnits" placeholder="5">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputOccupiedUnits">Occupied Units</label>
                                                <input type="number" class="form-control" id="inputOccupiedUnits" placeholder="2">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                                <label for="inputMonthyRent">Average Monthy Rent</label>
                                                <input type="number" class="form-control" id="inputMonthyRent" placeholder="$">
                                          </div> -->
                                          <div class="form-row">
                                              <div class="form-group col-md-6">
                                                    <label class="d-block">Are you ready to make a purchase now?</label>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                      <input type="radio" id="makePurchase1" name="makePurchase" class="custom-control-input">
                                                      <label class="custom-control-label" for="makePurchase1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                      <input type="radio" id="makePurchase2" name="makePurchase" class="custom-control-input">
                                                      <label class="custom-control-label" for="makePurchase2">No</label>
                                                    </div>
                                              </div>
                                              <div class="form-group col-md-6 ">
                                                    <label for="inputInvestmentAmount">Investment Amount</label>
                                                    <input type="number" class="form-control" id="inputInvestmentAmount" placeholder="$">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="form-check-label d-block" for="shareFee1">Are willing to pay a wholesale fee to Fidelity Mortgage Group for bringing you deals that fit your criteria?</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="shareFee1" name="shareFee" class="custom-control-input">
                                              <label class="custom-control-label" for="shareFee1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="shareFee2" name="shareFee" class="custom-control-input">
                                              <label class="custom-control-label" for="shareFee2">No</label>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="form-check-label d-block" for="mortgageNotes1">Are you interested in purchasing mortgage notes?</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="mortgageNotes1" name="mortgageNotes" class="custom-control-input">
                                              <label class="custom-control-label" for="mortgageNotes1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" id="mortgageNotes2" name="mortgageNotes" class="custom-control-input">
                                              <label class="custom-control-label" for="mortgageNotes2">No</label>
                                            </div>
                                          </div>

                                          <div class="form-row">
                                            <div class="form-group col-md-4 ">
                                                <label for="bInputACF">Annual Cash Flow</label>
                                                <input type="number" class="form-control" id="bInputACF" placeholder="$" onchange="calculateCoCR()">
                                            </div>
                                            <div class="form-group col-md-4 ">
                                                <label for="downPayment">Down Payment</label>
                                                <input type="number" class="form-control" id="downPayment" placeholder="$" onchange="calculateCoCR()">
                                            </div>
                                            <div class="form-group col-md-4 ">
                                                <label for="cashReturn">Cash-on-Cash Return (%)</label>
                                                <input type="number" class="form-control" id="cashReturn" placeholder="%" disabled="">
                                            </div>
                                              
                                          </div>

                                          <div class="form-row">
                                            <div class="form-group col-md-4 ">
                                                <label for="bInputNOI">Net Operating Income</label>
                                                <input type="number" class="form-control" id="bInputNOI" placeholder="$" onchange="calculateCapRate()">
                                            </div>
                                            <div class="form-group col-md-4 ">
                                                <label for="salePrice">Sales Price</label>
                                                <input type="number" class="form-control" id="salePrice" placeholder="$" onchange="calculateCapRate()">
                                            </div>
                                            <div class="form-group col-md-4 ">
                                                <label for="capRate">Cap Rate (%)</label>
                                                <input type="number" class="form-control" id="capRate" placeholder="%" disabled="">
                                            </div>
                                              
                                          </div>

                                          <div class="form-row">
                                            <div class="form-group col-md-6 ">
                                                <label for="bInputDebtService">Debt Service</label>
                                                <input type="number" class="form-control" id="bInputDebtService" placeholder="$" onchange="calculatePCF()">
                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label for="inputPCF">Positive Cash Flow</label>
                                                <input type="number" class="form-control" id="inputPCF" placeholder="$" disabled="">
                                            </div>
                                              
                                          </div>

                                          <button type="submit" class="btn btn-primary">Submit</button>

                                         <!--  <table class="table table-bordered my-4">
                                                <thead>
                                                    <tr class="my-4" style="color: #3970b5">
                                                        <th colspan="2"><h4>Calculations</h4></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="background: rgba(57, 112, 181, 0.14)">
                                                        <th>Cash Return</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cap Rate</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr style="background: rgba(57, 112, 181, 0.14)">
                                                        <th>Net Cash Flow</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                          </table> -->
                                          
                                    </form>
                                </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>