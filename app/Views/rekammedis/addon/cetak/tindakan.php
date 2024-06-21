<?php
    use App\Models\RekamTindakan;
    $model = new RekamTindakan();
    $data = $model->where('id_history',$id_history)->findAll();
?>
<div class="row mx-1 mt-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tindakan</h4>
                <div class="row">
                            <div class="col">
                                <div class="container-fluid px-0">
                                    <div class="table-responsive-sm">
                                        <table id="tindakan" class="table table-bordered border-dark-subtle">
                                            <thead>
                                                <tr>
                                                    <th class="text-center bg-light">No</th>
                                                    <th class="text-center bg-light">Kode Tindakan</th>
                                                    <th class="text-center bg-light">Tindakan</th>
                                                    <th class="text-center bg-light">Jumlah</th>
                                                    <th class="text-center bg-light">Tarif</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle" style="height: 50px;">
                                                <tr>
                                                    <?php foreach($data as $index => $item): ?>
                                                        <td class="text-center"><?=$index +1 ?></td>
                                                        <td class="text-center"><?=$item->kode ?></td>
                                                        <td class="text-center"><?=$item->tindakan ?></td>
                                                        <td class="text-center"><?=$item->jumlah ?></td>
                                                        <td class="text-center"><?=$item->tarif ?></td>
                                                    
                                                    <?php endforeach; ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
</div>