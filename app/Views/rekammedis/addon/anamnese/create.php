<?php
        use App\Models\HistoryModel;
        use App\Models\ObatModel;
        use App\Models\AlergiObat;
        $model = new HistoryModel();
        $data = $model->JoinAll();
        $obat = new ObatModel;
        $obat= $obat->findAll();
        $alergi = new AlergiObat();
        $alergi = $alergi->findAll();
?>        
        <form action="<?=site_url('/rekammedis/core/anamnese')?>" method="post" enctype="multipart/form-data">    
            <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <div class="mb-3 w-100"> 
                                    <div class="row w-100">
                                        <div class="col">
                                            <label for="th">Tinggi Badan (cm)</label>
                                            
                                            <input type="hidden" name="id_history" value="<?=$id_perserta ?>">
                                            <input type="hidden" name="status" value="create">
                                            <input type="text" name="tinggi"  id="th" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="th">Massa Tubuh (Kg)</label>
                                            <input type="text" name="berat" id="th" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="Gizi">Status Gizi</label>
                                <input type="text" name="gizi" id="gizi" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="Sistole">Sistole</label>
                                <input type="text" name="sistole" id="Sistole" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="Diastole">Diastole</label>
                                <input type="text" name="diastole" id="Diastole" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="Nadi">Denyut Nadi</label>
                                <input type="text" name="denyut_nadi" id="Nadi" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="Rate">Respirate Rate</label>
                                <input type="text" name="respirate_rate" id="Rate" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="Ket">Ket</label>
                                <input type="text" name="ket" id="Ket" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="THX">THX</label>
                                <input type="text" name="thx" id="THX" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="ABD">ABD</label>
                                <input type="text" name="abd" id="ABD" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="EXT">EXT</label>
                                <input type="text" name="ext" id="EXT" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="HE">HE</label>
                                <input type="text" name="he" id="HE" class="form-control">
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
                        <div class="row" style="height: 50px;">
                            <div class="col-3 d-flex align-items-center">
                                Cari Obat
                            </div>
                        <div class="col d-flex align-items-center">
                                <input type="hidden" value="<?=site_url('rekammedis/core/alergi')?>" id="url_alergi">
                                <select  id="select_alergi" class="form-select border border-5 search ">
                                    <?php foreach($obat as $unit): ?>
                                        <option value="<?=$unit['id'] ?>">
                                            <?=$unit['name']?> / <?=$unit['kode'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <input type="hidden"  id="id_perserta" value="<?=$id_perserta?>">
                            </div>
                        </div>
                        <div class="row" style="height: 50px;">
                            <div class="col-3"></div>
                            <div class="col d-flex align-items-center">
                                <button type="button" id="button-alergi" class="btn btn-primary" disabled>
                                    Tambah
                                </button>
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
                                                <th class="text-center bg-light">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($alergi as $index => $item): ?>
                                            <tr>
                                                <td class="text-center"><?=$index +1 ?></td>
                                                    <td class="text-center"><?=$item['kode']?></td>
                                                    <td class="text-center"><?=$item['name'] ?></td>
                                                    <td class="text-center">
                                                        <button
                                                                id="deleteBtn" 
                                                                data-id="<?=$item['id'] ?>" 
                                                                data-name="<?=$item['name'] ?>"
                                                                data-url="alergi"
                                                                type="button" 
                                                                class="deleteBtn btn btn-danger waves-effect waves-light">
                                                                    <i class="uil uil-trash-alt"></i>
                                                            </button>
                                                </td>   
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
                                    <textarea name="anamnese" id="" cols="20" rows="5" style="width: 100%;" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="container d-flex justify-content-end gap-1 p-0" style="height: 50px;">
                        <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Simpan</button>
                        <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>