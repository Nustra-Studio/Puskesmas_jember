<?php
        use App\Models\RekamObat;
        $model = new RekamObat();
        $data = $model->where('id_history',$id_history)->findAll();
    ?>
<div class="row mx-1 mt-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Obat</h4>
                <div class="row">
                            <div class="col">
                                <div class="container-fluid p-0">
                                    <div class="table-responsive-sm p-0">
                                        <table id="diagnosa" class="table table-bordered border-dark-subtle">
                                            <thead>
                                                <tr>
                                                    <th class="text-center bg-light">No</th>
                                                    <th class="text-center bg-light">Obat</th>
                                                    <th class="text-center bg-light">Dosis</th>
                                                    <th class="text-center bg-light">Satuan</th>
                                                    <th class="text-center bg-light">Tarif</th>
                                                    <th class="text-center bg-light">Harga</th>
                                                    <th class="text-center bg-light">Catatan</th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle" style="height: 50px;">
                                                <tr>
                                                    <?php foreach($data as $index => $item): ?>
                                                        <td class="text-center"><?=$index +1 ?></td>
                                                        <td class="text-center"><?=$item->obat ?></td>
                                                        <td class="text-center"><?=$item->dosis ?></td>
                                                        <td class="text-center"><?=$item->satuan ?></td>
                                                        <td class="text-center"><?=$item->tarif ?></td>
                                                        <td class="text-center"><?=$item->tarif * $item->jumlah ?></td>
                                                        <td class="text-center"><?=$item->catatan ?></td>
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