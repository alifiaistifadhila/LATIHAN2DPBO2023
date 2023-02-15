public class Human{

    private String nik;
    private String nama;
    private String gender;

    Human(){
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

}