public class SivitasAkademik extends Mahasiswa{

    private String univ;
    private String email;

    SivitasAkademik(){
    }

    //getter dan setter
    public void setUniv(String univ){
        this.univ = univ;
    }

    public String getUniv(){
        return this.univ;
    }

    public void setEmail(String email){
        this.email = email;
    }

    public String getEmail(){
        return this.email;
    }

}