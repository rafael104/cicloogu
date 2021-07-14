<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaUnidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function(Blueprint $table){
            $table->integer('unidade');
            $table->string('nome');
            $table->string('uf');
            $table->string('sigla');
        });
        DB::table('unidades')->insert([
            ['unidade'=>'6407','nome'=>'GOVERNO JUAZEIRO NORTE','uf'=>'CE','sigla'=>'REGOV/JN'],
            ['unidade'=>'6408','nome'=>'GOVERNO MONTES CLAROS','uf'=>'MG','sigla'=>'REGOV/MO'],
            ['unidade'=>'6409','nome'=>'GOVERNO DOURADOS','uf'=>'MS','sigla'=>'REGOV/DD'],
            ['unidade'=>'6412','nome'=>'GOVERNO PETROLINA','uf'=>'PE','sigla'=>'REGOV/LI'],
            ['unidade'=>'6413','nome'=>'GOVERNO PELOTAS','uf'=>'RS','sigla'=>'REGOV/PL'],
            ['unidade'=>'6414','nome'=>'GOVERNO BARREIRAS','uf'=>'BA','sigla'=>'REGOV/BI'],
            ['unidade'=>'6417','nome'=>'GOVERNO OSASCO','uf'=>'SP','sigla'=>'REGOV/OS'],
            ['unidade'=>'6420','nome'=>'GOVERNO SANTO ANDRE','uf'=>'SP','sigla'=>'GIGOV/SD'],
            ['unidade'=>'6421','nome'=>'GOVERNO NOVO HAMBURGO','uf'=>'RS','sigla'=>'REGOV/NH'],
            ['unidade'=>'6423','nome'=>'GOVERNO PONTA GROSSA','uf'=>'PR','sigla'=>'REGOV/PG'],
            ['unidade'=>'6427','nome'=>'GOVERNO VIT CONQUISTA','uf'=>'BA','sigla'=>'GIGOV/VC'],
            ['unidade'=>'7122','nome'=>'GOVERNO BELEM','uf'=>'PA','sigla'=>'GIGOV/BE'],
            ['unidade'=>'7123','nome'=>'GOVERNO BELO HORIZONTE','uf'=>'MG','sigla'=>'GIGOV/BH'],
            ['unidade'=>'7124','nome'=>'GOVERNO BRASILIA','uf'=>'DF','sigla'=>'GIGOV/BR'],
            ['unidade'=>'7125','nome'=>'GOVERNO CAMPO GRANDE','uf'=>'MS','sigla'=>'GIGOV/CG'],
            ['unidade'=>'7126','nome'=>'GOVERNO CUIABA','uf'=>'MT','sigla'=>'GIGOV/CB'],
            ['unidade'=>'7127','nome'=>'GOVERNO CURITIBA','uf'=>'PR','sigla'=>'GIGOV/CT'],
            ['unidade'=>'7128','nome'=>'GOVERNO FLORIANOPOLIS','uf'=>'SC','sigla'=>'GIGOV/FL'],
            ['unidade'=>'7129','nome'=>'GOVERNO FORTALEZA','uf'=>'CE','sigla'=>'GIGOV/FO'],
            ['unidade'=>'7130','nome'=>'GOVERNO GOIANIA','uf'=>'GO','sigla'=>'GIGOV/GO'],
            ['unidade'=>'7131','nome'=>'GOVERNO JOAO PESSOA','uf'=>'PB','sigla'=>'GIGOV/JP'],
            ['unidade'=>'7132','nome'=>'GOVERNO MACEIO','uf'=>'AL','sigla'=>'GIGOV/ME'],
            ['unidade'=>'7133','nome'=>'GOVERNO MANAUS','uf'=>'AM','sigla'=>'GIGOV/MN'],
            ['unidade'=>'7134','nome'=>'GOVERNO NATAL','uf'=>'RN','sigla'=>'GIGOV/NA'],
            ['unidade'=>'7135','nome'=>'GOVERNO PALMAS','uf'=>'TO','sigla'=>'GIGOV/PM'],
            ['unidade'=>'7136','nome'=>'GOVERNO PORTO ALEGRE','uf'=>'RS','sigla'=>'GIGOV/PO'],
            ['unidade'=>'7137','nome'=>'GOVERNO RECIFE','uf'=>'PE','sigla'=>'GIGOV/RE'],
            ['unidade'=>'7138','nome'=>'GOVERNO RIO DE JANEIRO','uf'=>'RJ','sigla'=>'GIGOV/RJ'],
            ['unidade'=>'7139','nome'=>'GOVERNO SALVADOR','uf'=>'BA','sigla'=>'GIGOV/SA'],
            ['unidade'=>'7140','nome'=>'GOVERNO SAO LUIS','uf'=>'MA','sigla'=>'GIGOV/SL'],
            ['unidade'=>'7141','nome'=>'GOVERNO SAO PAULO','uf'=>'SP','sigla'=>'GIGOV/SP'],
            ['unidade'=>'7142','nome'=>'GOVERNO TERESINA','uf'=>'PI','sigla'=>'GIGOV/TE'],
            ['unidade'=>'7143','nome'=>'GOVERNO VITORIA','uf'=>'ES','sigla'=>'GIGOV/VT'],
            ['unidade'=>'7689','nome'=>'GOVERNO ANAPOLIS','uf'=>'GO','sigla'=>'REGOV/AN'],
            ['unidade'=>'7690','nome'=>'GOVERNO SANTOS','uf'=>'SP','sigla'=>'GIGOV/ST'],
            ['unidade'=>'7691','nome'=>'GOVERNO BAURU','uf'=>'SP','sigla'=>'GIGOV/BU'],
            ['unidade'=>'7692','nome'=>'GOVERNO BLUMENAU','uf'=>'SC','sigla'=>'REGOV/BL'],
            ['unidade'=>'7694','nome'=>'GOVERNO CAMPOS','uf'=>'RJ','sigla'=>'REGOV/CM'],
            ['unidade'=>'7695','nome'=>'GOVERNO CARUARU','uf'=>'PE','sigla'=>'GIGOV/CA'],
            ['unidade'=>'7696','nome'=>'GOVERNO CASCAVEL','uf'=>'PR','sigla'=>'REGOV/CV'],
            ['unidade'=>'7697','nome'=>'GOVERNO CAXIAS DO SUL','uf'=>'RS','sigla'=>'REGOV/CX'],
            ['unidade'=>'7698','nome'=>'GOVERNO CHAPECO','uf'=>'SC','sigla'=>'GIGOV/CH'],
            ['unidade'=>'7701','nome'=>'GOVERNO F DE SANTANA','uf'=>'BA','sigla'=>'GIGOV/FS'],
            ['unidade'=>'7702','nome'=>'GOVERNO GOV VALADARES','uf'=>'MG','sigla'=>'GIGOV/GV'],
            ['unidade'=>'7703','nome'=>'GOVERNO ITABUNA','uf'=>'BA','sigla'=>'REGOV/IT'],
            ['unidade'=>'7704','nome'=>'GOVERNO JUIZ DE FORA','uf'=>'MG','sigla'=>'GIGOV/JF'],
            ['unidade'=>'7705','nome'=>'GOVERNO JUNDIAI','uf'=>'SP','sigla'=>'REGOV/JD'],
            ['unidade'=>'7706','nome'=>'GOVERNO PIRACICABA','uf'=>'SP','sigla'=>'GIGOV/PK'],
            ['unidade'=>'7707','nome'=>'GOVERNO LONDRINA','uf'=>'PR','sigla'=>'REGOV/LD'],
            ['unidade'=>'7711','nome'=>'GOVERNO PORTO VELHO','uf'=>'RO','sigla'=>'GIGOV/PV'],
            ['unidade'=>'7712','nome'=>'GOVERNO PRES PRUDENTE','uf'=>'SP','sigla'=>'GIGOV/PP'],
            ['unidade'=>'7713','nome'=>'GOVERNO RIBEIRAO PRETO','uf'=>'SP','sigla'=>'GIGOV/RP'],
            ['unidade'=>'7714','nome'=>'GOVERNO RIO BRANCO','uf'=>'AC','sigla'=>'GIGOV/RB'],
            ['unidade'=>'7715','nome'=>'GOVERNO SANTA MARIA','uf'=>'RS','sigla'=>'GIGOV/SM'],
            ['unidade'=>'7716','nome'=>'GOVERNO S J RIO PRETO','uf'=>'SP','sigla'=>'GIGOV/SR'],
            ['unidade'=>'7717','nome'=>'GOVERNO S J DOS CAMPOS','uf'=>'SP','sigla'=>'GIGOV/SJ'],
            ['unidade'=>'7718','nome'=>'GOVERNO SOROCABA','uf'=>'SP','sigla'=>'GIGOV/SO'],
            ['unidade'=>'7719','nome'=>'GOVERNO POCOS DE CALDAS','uf'=>'MG','sigla'=>'REGOV/PC'],
            ['unidade'=>'7720','nome'=>'GOVERNO VOLTA REDONDA','uf'=>'RJ','sigla'=>'REGOV/VR'],
            ['unidade'=>'7721','nome'=>'GOVERNO UBERLANDIA','uf'=>'MG','sigla'=>'GIGOV/UB'],
            ['unidade'=>'7728','nome'=>'GOVERNO CRICIUMA','uf'=>'SC','sigla'=>'REGOV/CR'],
            ['unidade'=>'7729','nome'=>'GOVERNO DIVINOPOLIS','uf'=>'MG','sigla'=>'REGOV/DV'],
            ['unidade'=>'7730','nome'=>'GOVERNO JOINVILLE','uf'=>'SC','sigla'=>'REGOV/JV'],
            ['unidade'=>'7733','nome'=>'GOVERNO MARINGA','uf'=>'PR','sigla'=>'GIGOV/MR'],
            ['unidade'=>'7734','nome'=>'GOVERNO PASSO FUNDO','uf'=>'RS','sigla'=>'GIGOV/PF'],
            ['unidade'=>'7880','nome'=>'GOVERNO BOA VISTA','uf'=>'RR','sigla'=>'GIGOV/BV'],
            ['unidade'=>'7881','nome'=>'GOVERNO MACAPA','uf'=>'AP','sigla'=>'GIGOV/MC']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('unidades');
    }
}
