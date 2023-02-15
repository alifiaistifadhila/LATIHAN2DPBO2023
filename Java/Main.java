public class Main{
    public static void main(String[] args){
        SivitasAkademik data = new SivitasAkademik();

        //inputan
        data.setNik("1234567890");
        data.setNama("Alifia Isti Fadhila");
        data.setGender("Perempuan");
        data.setProdi("Ilmu Komputer");
        data.setFakultas("FPMIPA");
        data.setUniv("Universitas Pendidikan Indonesia");
        data.setEmail("alifia@upi.edu");

        //menampilkan output
        System.out.println("Data Human");
        System.out.println("==========\n");
        System.out.println("NIK                 : " + data.getNik());
        System.out.println("Nama                : " + data.getNama());
        System.out.println("Jenis Kelamin       : " + data.getGender());
        System.out.println("Program Studi       : " + data.getProdi());
        System.out.println("Fakultas            : " + data.getFakultas());
        System.out.println("Asal Universitas    : " + data.getUniv());
        System.out.println("Email Edu           : " + data.getEmail());

    }
}