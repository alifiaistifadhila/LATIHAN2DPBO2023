public class Mahasiswa extends Human{

    private String nik;
    private String nama;
    private String gender;
    private String prodi;
    private String fakultas;

    Mahasiswa(){
    }

    //getter dan setter
    public void setNik(String nik){
        this.nik = nik;
    }

    public String getNik(){
        return this.nik;
    }

    public void setNama(String nama){
        this.nama = nama;
    }

    public String getNama(){
        return this.nama;
    }

    public void setGender(String gender){
        this.gender = gender;
    }

    public String getGender(){
        return this.gender;
    }

    public void setProdi(String prodi){
		this.prodi = prodi;
	}

	public String getProdi(){
		return this.prodi;
	}

	public void setFakultas(String fakultas){
		this.fakultas = fakultas;
	}

	public String getFakultas(){
		return this.fakultas;
	}

}