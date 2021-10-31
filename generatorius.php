<?php require_once('./header.php'); ?>


<!-- hidden -->
   
<div class="paslaugos_prekes_input first-input-item hidden my-5">
                                    <div class="form-group py-2">
                                        <input type="text" name="pavadinimas[]" class="form-control form-control-input" placeholder="Paslaugos ar prekės pavadinimas">
                                    </div>       
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="form-group py-2">
                                                <label>Matas</label>
                                                <select class="form-control form-control-input" name="matas[]">
                                                    <option value="vnt.">vnt.</option>
                                                    <option value="kg">kg</option>
                                                    <option value="val.">val.</option>
                                                </select>
                                            </div>                                
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="form-group py-2">
                                                <label>Kiekis</label>
                                                <input type="text" name="kiekis[]" class="form-control form-control-input kiekis-input" placeholder="Kiekis">
                                            </div>                                
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="form-group py-2">
                                                <label>Kaina</label>
                                                <input type="text" name="kaina[]" class="form-control form-control-input kaina-input" placeholder="Kaina">
                                            </div>                                
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="form-group py-2">
                                                <label>Viso<span class="hidden pvm-notice"> + PVM</span></label>
                                                <input type="number" name="suma[]" class="form-control form-control-input viso-input" placeholder="Viso" readonly>
                                            </div>                                
                                        </div>
                                    </div> 

                                </div> 
<!-- hidden -->


<form action="./pdf.php" method="POST">
    <!-- Contact -->
    <section class="contact d-flex align-items-center py-5" id="contact" style="height: auto !important">
        <div class="container text-light mt-5">
            <div class="row">
                <div class="col-12">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <p>Sąskaitų faktūrų</p>
                            <h2 class="py-2">Generatorius</h2>
                            <p class="para-light">Užpildykite laukelius ir gaukite tiesiai PDF failą tiesiai į Jūsų įrenginį</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center" data-aos="fade-right">
                    <div style="">
                        <div>
                            <div class="row" >
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" name="serijos_pavadinimas" class="form-control form-control-input" placeholder="Serijos pavadinimas" required>
                                    </div>                                
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="number" name="serijos_numeris" class="form-control form-control-input" placeholder="Serijos numeris" required>
                                    </div>                                 
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" name="saskaita_israse" class="form-control form-control-input" placeholder="Sąskaitą faktūrą išrašė" required>
                                    </div>                                 
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <select class="form-control form-control-input tipas-select" name="tipas">
                                            <option value="false">be pvm</option>
                                            <option value="true">su pvm</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="col-lg-12 hidden pvm-pasirinkimas">
                                    <div class="form-group py-2">
                                        <select class="form-control form-control-input" name="pvm_pasirinkimas">
                                            <option value="21">21 %</option>
                                            <option value="9">9 %</option>
                                            <option value="5">5 %</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group py-2">
                                        <label>Data</label>
                                        <input type="date" name="data" class="form-control form-control-input datePicker" placeholder="Sąskaitos data" required>
                                    </div>                                 
                                </div>
                            </div>     
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" rows="6" name="papildoma_informacija" placeholder="Papildoma informacija"></textarea>
                            </div>  
                            <h3 class="mt-4">Paslaugos ar prekės</h3> 
                                <div class="paslaugos_prekes_input my-5">
                                    <div class="form-group py-2">
                                        <input type="text" name="pavadinimas[]" class="form-control form-control-input" placeholder="Paslaugos ar prekės pavadinimas" required>
                                    </div>       
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="form-group py-2">
                                                <label>Matas</label>
                                                <select class="form-control form-control-input" name="matas[]">
                                                    <option value="vnt.">vnt.</option>
                                                    <option value="kg">kg</option>
                                                    <option value="val.">val.</option>
                                                </select>
                                            </div>                                
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="form-group py-2">
                                                <label>Kiekis</label>
                                                <input type="text" name="kiekis[]" class="form-control form-control-input kiekis-input" placeholder="Kiekis" required>
                                            </div>                                
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="form-group py-2">
                                                <label>Kaina</label>
                                                <input type="text" name="kaina[]" class="form-control form-control-input kaina-input" placeholder="Kaina" required>
                                            </div>                                
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="form-group py-2">
                                                <label>Viso<span class="hidden pvm-notice"> + PVM</span></label>
                                                <input type="number" name="suma[]" class="form-control form-control-input viso-input" placeholder="Viso" required readonly>
                                            </div>                                
                                        </div>
                                    </div> 

                                </div>       

                                <div class="all-inputs"></div>    

                                <button type="button" class="add_btn btn-warning"><i class="fas fa-plus"></i> Pridėti paslaugą ar prekę</button>

                        </div>

                    </div> <!-- end of div -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" rows="6" name="pardavejas" placeholder="Pardavėjo rekvizitai"></textarea>
                            </div>  
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" rows="6" name="pirkejas" placeholder="Pirkėjo rekvizitai"></textarea>
                            </div>   
                </div> <!-- end of col -->
                <div class="col-12">
                        <div class="my-3">
                            <button type="submit" class="btn form-control-submit-button">Generuoti</button>
                        </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of contact -->
</form>

<?php require_once('./footer.php'); ?>