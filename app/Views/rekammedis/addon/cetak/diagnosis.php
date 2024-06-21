<?php
    use App\Models\RekamDiagnosa;
    $model = new RekamDiagnosa();
    $data = $model->where('id_history',$id_history)->findAll();
?>
<div class="row mx-1 mt-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Diagnosis</h4>
                    <div class="row">
                        <div class="col">
                            <div class="container-fluid p-0">
                                <div class="table-responsive-sm p-0">
                                    <table id="diagnosa" class="table table-bordered border-dark-subtle">
                                        <thead>
                                            <tr>
                                                <th class="text-center bg-light">No</th>
                                                <th class="text-center bg-light">Kode ICD</th>
                                                <th class="text-center bg-light">Diagnosa</th>
                                                <th class="text-center bg-light">Jenis Kasus</th>
                                                <th class="text-center bg-light">Jenis Diagnosa</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle" style="height: 50px;">
                                                <?php foreach($data as $index => $item): ?>
                                                <tr>
                                                    <td class="text-center"><?=$index +1 ?></td>
                                                    <td class="text-center"><?=$item->kode_icd ?></td>
                                                    <td class="text-center"><?=$item->diagnosa ?></td>
                                                    <td class="text-center"><?=$item->jenis_kasus ?></td>
                                                    <td class="text-center"><?=$item->jenis_diagnosa ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</div>