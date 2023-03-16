function tambah(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if(total = a1 + a2){
        frm.hasil.value = total;
    }else{
        frm.hasil.value = 'Maaf angka belum terisi';
    }
}
function kurang(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if(total = a1 - a2){
        frm.hasil.value = total;
    }else{
        frm.hasil.value = 'Maaf angka belum terisi';
    }
}
function kali(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if(total = a1 * a2){
        frm.hasil.value = total;
    }else{
        frm.hasil.value = 'Maaf angka belum terisi';
    }
}
function bagi(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if(total = a1 / a2){
        frm.hasil.value = total;
    }else{
        frm.hasil.value = 'Maaf angka belum terisi';
    }
}
function pangkat(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if(total = a1 ** a2){
        frm.hasil.value = total;
    }else{
        frm.hasil.value = 'Maaf angka belum terisi';
    }
}