               <div class="panel panel-default">
                 <div class="panel-heading">
                   Tabel Pegawai
                 </div>
                 <div class="panel-body">
                   <div class="table-responsive">
                     <table id="tabelpegawai" class="table table-bordered table-hover ">
                       <thead>
                         <tr>
                           <th>No</th>
                           <th>ID_peg</th>
                           <th>NAMA PEGAWAI</th>
                           <th>GAJI</th>
                           <th>USIA</th>
                           <th>FOTO</th>
                         </tr>
                       </thead>
                       <tbody>
                         <?php $no = 1;
                          foreach ($tampilpegawai as $tp) : ?>
                           <tr>
                             <td><?php echo $no; ?></td>
                             <td><b><?php echo $tp->id; ?></b></td>
                             <td><?php echo $tp->employee_name; ?></td>
                             <td><?php echo $tp->employee_salary; ?></td>
                             <td><?php echo $tp->employee_age; ?></td>
                             <td><?php echo $tp->profile_image; ?></td>
                           </tr>
                         <?php $no++;
                          endforeach; ?>
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
               <!-- /.box-body -->