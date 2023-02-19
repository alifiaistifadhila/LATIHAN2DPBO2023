from SivitasAkademik import SivitasAkademik

class main(SivitasAkademik):
    
    data = SivitasAkademik()
    
    # Inputan Data
    data.setNik(32091485589373)
    data.setNama("Alifia Isti Fadhila")
    data.setGender("Perempuan")
    data.setNim(2904857)
    data.setFakultas("FPMIPA")
    data.setProdi("Ilmu Komputer")
    data.setUniv("Universitas Pendidikan Indonesia")
    data.setEmail("alifia@upi.edu")
    
    # Menampilkan Data
    print("DATA MAHASISWA")
    print("==============")
    print("NIK              : " + str(data.getNik()))
    print("Nama             : " + str(data.getNama()))
    print("Jenis Kelamin    : " + str(data.getGender()))
    print("NIM              : " + str(data.getNim()))
    print("Program Studi    : " + str(data.getProdi()))
    print("Fakultas         : " + str(data.getFakultas()))
    print("Asal Universitas : " + str(data.getUniv()))
    print("Email Edu        : " + str(data.getEmail()))