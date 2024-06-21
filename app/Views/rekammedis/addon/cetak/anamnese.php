    <?php
            use App\Models\HistoryModel;
            use App\Models\ObatModel;
            use App\Models\AlergiObat;
            use App\Models\Anamnese;
            $obat = new ObatModel;
            $obat= $obat->findAll();
            $alergi = new AlergiObat();
            $alergi = $alergi->findAll();
            $anamnese = new Anamnese;
            $id = $id_perserta ?? 0;
            $data = $anamnese->where('id_history',$id_history)->findAll();

    ?>       
    <div class="row mt-5 pt-5 mx-1">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Anamnese</h4>
                <div class="row mx-4">
                    <div class="col-lg-12">
                        <?php foreach($data as $item): ?>
                        <form action="<?=site_url('/rekammedis/core/anamnese')?>" method="post" enctype="multipart/form-data">    
                            <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col d-flex align-items-center">
                                                <div class="mb-3 w-100"> 
                                                    <div class="row w-100">
                                                        <div class="col">
                                                            <label for="th">Tinggi Badan (cm)</label>
                                                            <input type="text" name="tinggi" value="<?=$item->tinggi ?>"   id="th" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label for="th">Massa Tubuh (Kg)</label>
                                                            <input type="text" name="berat"  value="<?=$item->berat ?>" id="th" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="Gizi">Status Gizi</label>
                                                <input type="text" name="gizi" id="gizi"  value="<?=$item->gizi ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="Sistole">Sistole</label>
                                                <input type="text" name="sistole" id="Sistole"  value="<?=$item->sistole ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="Diastole">Diastole</label>
                                                <input type="text" name="diastole" id="Diastole"  value="<?=$item->diastole ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="Nadi">Denyut Nadi</label>
                                                <input type="text" name="denyut_nadi" id="Nadi"  value="<?=$item->denyut_nadi ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="Rate">Respirate Rate</label>
                                                <input type="text" name="respirate_rate" id="Rate"  value="<?=$item->respirate_rate ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="Ket">Ket</label>
                                                <input type="text" name="ket" id="Ket"  value="<?=$item->ket ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="THX">THX</label>
                                                <input type="text" name="thx" id="THX"  value="<?=$item->thx ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="ABD">ABD</label>
                                                <input type="text" name="abd" id="ABD"  value="<?=$item->abd ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="EXT">EXT</label>
                                                <input type="text" name="ext" id="EXT"  value="<?=$item->ext ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="HE">HE</label>
                                                <input type="text" name="he" id="HE"  value="<?=$item->he ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg mt-3 mt-lg-0">
                                        <div class="row" style="height: 50px;">
                                            <div class="col-3 d-flex align-items-center">
                                                Alergi Obat
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="form-check ">
                                                            <input class="form-check-input shadow border border-3" type="radio" name="flexRadioDefault" id="checkboxYes" >
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Ya
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-check ">
                                                                <input class="form-check-input shadow border border-3" type="radio" name="flexRadioDefault" id="checkboxNo" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                Tidak
                                                                </label>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="table-responsive-md">
                                                    <table id="obat" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center bg-light">No</th>
                                                                <th class="text-center bg-light">Kode Obat</th>
                                                                <th class="text-center bg-light">Nama Obat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach($alergi as $index => $unit): ?>
                                                            <tr>
                                                                <td class="text-center"><?=$index +1 ?></td>
                                                                    <td class="text-center"><?=$unit['kode']?></td>
                                                                    <td class="text-center"><?=$unit['name'] ?></td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <div class="col">
                                                    Anamnese <br>
                                                    <textarea name="anamnese" id=""   cols="20" rows="5" style="width: 100%;" class="form-control"><?=$item->anamnese ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>