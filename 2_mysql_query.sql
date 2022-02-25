SELECT tb_mahasiswa.mhs_nama, 
max(tb_mahasiswa_nilai.nilai), tb_matakuliah.mk_kode
from tb_mahasiswa
JOIN tb_mahasiswa_nilai
ON tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id
JOIN tb_matakuliah
ON tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id
WHERE tb_matakuliah.mk_kode = 'MK303';