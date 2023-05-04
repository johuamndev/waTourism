<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\lugar;
use Illuminate\Support\Facades\DB; 

class lugaresSeeder extends Seeder
{

    public function run(): void
    {
        $idinfoLugar = [
            1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32
        ];

        $nombre = [
            'Machu Picchu',
            'Valle del Colca',
            'Choquequirao',
            'Líneas de Nazca',
            'Kuelap',
            'Reserva Nacional de Paracas',
            'Islas Ballestas',
            'Caral',
            'Lago Titicaca',
            'Parque Nacional de Manu',
            'Río Amazonas', 
            'Parque Nacional del Huascarán', 
            'Lagunas de Llanganuco', 
            'Valle Sagrado de los Incas',
            'Montaña de Colores',
            'Camino Inca',
            'Reserva Nacional de Tambopata',
            'Lago Sandoval',
            'Catarata de Gocta',
            'Laguna Huacachina',
            'Los Manglares de Tumbes',
            'Playa Pocitas',
            'Ciudadela de Chan Chan',
            'Tumbas Reales de Sipán',
            'Punta Sal',
            'Monasterio de Santa Catalina',
            'Chavín de Huántar',
            'Pacaya Samiria',
            'Huanchaco',
            'Los Baños del Inca',
            'Salkantay',
            'Huaca Pucllana'
        ];

        $categoria = [
            3,2,3,2,2,2,2,1,3,2,1,2,2,3,3,3,2,2,1,1,1,1,3,2,3,1,1,3,3,3,1,1
        ];

        $descripcion = [
            'El Santuario Histórico de Machu Picchu es el destino turístico más visitado de Perú y de América. Es una antigua ciudad inca que está ubicado en el corazón de los Andes peruanos. Fue construido en el siglo XV, durante la época inca. Se cree que esta ciudad sagrada fue un importante lugar de culto religioso y de descanso durante el reinado del Inca Pachacutec.
            El año 2007, Machu Picchu fue declarado una de las 7 maravillas del mundo moderno.
            La llacta inca de Machu Picchu posee la más impresionante arquitectura inca. Pues la ciudad acoge innumerables edificaciones de piedra, entre los que sobresalen: la Casa del Guardián, la Plaza Sagrada, el Reloj Solar, el Templo del Sol, el Templo del Cóndor, la Roca Sagrada, etc.
            ',
            'El Valle del Colca es un extenso valle de tierras fértiles que bordea el río Colca. También es conocido como el Valle del Fuego.
            Es otro de los más importantes atractivos del Perú; pues aquí están ubicados el cañón del Colca (uno de los cañones más profundos del mundo), los baños Termales de la Calera y el famoso mirador la Cruz del Cóndor, donde podrás apreciar el vuelo de los cóndores.
            ',
            'El Parque Arqueológico de Choquequirao es otro de los mejores destinos turísticos de Perú. Por ello, el año 2017 fue declarado como una de las mejores rutas de trekking del mundo.

            La ciudad inca de Choquequirao está ubicado entre las estribaciones que forman el gran Cañón del Apurímac y el nevado de Salkantay.
            
            Las ruinas incas de Choquequirao es considerado como el último refugio inca, porque aquí se refugiaron los últimos incas que hicieron resistencia frente a la invasión española.
            
            Choquequirao sobresale por sus complejos de edificios, andenes, templos, fuentes de agua y zonas residenciales que están distribuidas entre las montañas. Además, tiene un parecido arquitectónico con Machu Picchu, por esta razón se le considera como la hermana sagrada de Machu Picchu.'
            ,
            'Las Líneas de Nazca son un grupo de antiguos geoglifos grabados en la arena del desierto. Están ubicados en el Valle de Nazca, Valle de Palpa y en el desierto de Jumana. Estos enigmáticos geoglifos fueron creados por los hombres de la Cultura Nazca (200 a.C. – 700 d.C.) y se extienden sobre una superficie de 450 Km².

            El tamaño de los geoglifos oscila entre 50 y 300 metros y tienen variadas formas: figuras geométricas, zoomorfas, fitomorfas y antropomorfas. Y entre las líneas y geoglifos más famosos podemos mencionar: colibrí, mono, pájaro fragata, pájaro gigante, araña.
            
            Para la mayoría de estudiosos, las Líneas de Nazca fueron un enorme calendario astronómico o un lugar de culto al agua.
            
            La mejor forma de visitar las Líneas de Nazca es haciendo un sobrevuelo. Para ello, lo ideal es tomar un vuelo en avioneta, desde Pisco o Paracas.'
            ,
            'Es una ciudadela pre inca amurallada con bloques de piedras. Fue construido por la cultura Chachapoyas (800 d.C. al 1470 d.C.), pero posteriormente fue ocupado por los incas. Está ubicado sobre la cima de la colina Barreta, en los Andes nororientales del Perú, en la región Amazonas.

            La ciudadela tiene una muralla de piedras de 20 metros de altura y cuenta con tres puertas de ingreso. En el interior de la ciudad se encuentran recintos de índole administrativa, religioso, espacios ceremoniales y de residencia permanente, que están distribuidos en diferentes niveles. La mayoría de estas edificaciones de piedra tienen formas circulares con frisos en forma de rombos y zigzag.
            
            Por su impresionante arquitectónica, el maravilloso paisaje que lo rodea, y por ser el único atractivo turístico de Perú al que se puede llegar en teleférico: el centro arqueológico de Kuelap es otro de los destinos turísticos más visitados de Perú.'
            ,
            'Es una zona protegida donde se conserva los ecosistemas marinos (fauna marina y aves guaneras) de las frías aguas de la corriente de Humboldt, en el océano Pacífico. También protege los lugares de descanso y alimentación de las aves migratorias.

            Dentro de la reserva están ubicados importantes atracciones turísticas, como: el famoso geoglifo Candelabro de Paracas, el museo de sitio Julio C. Tello, Lagunillas, algunas formaciones rocosas y muchas hermosas playas.'
            ,
            'Son un conjunto de islas y formaciones rocosas que están ubicados a media hora de la costa de Paracas. Estas islas son el hogar de miles de aves guaneras y especies marinas: lobos marinos, pingüinos de Humboldt, pelícanos, lobos marinos, leones marinos, etc.

            El recorrido por las Islas Ballestas se hace desde la bahía de Paracas, en lanchas. El paseo dura 2 horas: 30 minutos de ida, 1 hora de observación de la fauna (solo desde la lancha porque no está permitido el desembarco) y 30 minutos de retorno.'
            ,
            'El sitio arqueológico de Caral es considerado la ciudad más antigua de Perú. Es un complejo de edificaciones que pertenece a la civilización Caral, una de las civilizaciones más antiguas del mundo, de aproximadamente 5000 años de antigüedad.

            La ciudad sagrada de Caral está ubicada sobre una terraza natural, en el valle de Supe. Fue construido con piedra, barro y madera. La ciudad está organizada en anfiteatros, seis pirámides, templos y numerosas edificaciones con fines de vivienda.
            
            Durante tu viaje por Perú, Caral deberá ser el primer atractivo turístico a visitar. Pues, aquí se forjaron muchas de las técnicas y tecnologías que fueron perfeccionados por las culturas pre incas e incas. Por poner un ejemplo, el quipu más antiguo fue encontrado aquí. De igual modo, muchos instrumentos de pesca y agricultura, y 32 flautas hechas con huesos de cóndor y pelícanos.'
            , 
            'El lago Titicaca es el lago navegable más alto del mundo. Es una de las mayores reservas de agua dulce en América del Sur. Está ubicado en la meseta del Collao, entre Perú y Bolivia. Tiene una extensión de 8562 km² y una profundidad de 281 metros. Y según la mitología andina, de las frías y diáfanas aguas de este lago emergieron los fundadores del gran imperio inca.

            En los alrededores de este hermoso lago se desarrollaron las culturas pre incas: Tiahuanaco y Pucará. Y actualmente, muchas costumbres y tradiciones de estos pueblos aborígenes aún perviven en la población local que habita las numerosas islas que se encuentran dentro del lago Titicaca.
            
            Los centros turísticos más bonitos que podrás visitar dentro del lago Titicaca y en sus alrededores, son: las Islas flotantes de los Uros (hechos a base de totora), la Isla Amantaní, la Isla Taquile y las Chullpas de Sillustani. Y entre las actividades turísticas más recomendadas que podrás disfrutar aquí, se encuentran: el turismo vivencial, los deportes de aventuras en aguas planas y la pesca deportiva.'
            ,
            'El Parque Nacional de Manu es un área natural protegida con la mayor diversidad de reptiles, anfibios, mariposas diurnas y aves de todo el planeta. Es Patrimonio Natural de la Humanidad. Es una de las mayores reservas de biosfera en el Mundo. Y fue creado con el fin de catalogar, preservar y dará conocer a la humanidad la herencia natural y cultural de la selva amazónica.

            En la Reserva Nacional del Manu se encuentra la mayor diversidad biológica del planeta. Además, es el hogar de numerosos grupos étnicos: Kugapakori, Nahua, Matsiguenga, Harakmbut, Yine y algunos grupos étnicos que viven en aislamiento voluntario.
            
            Este entorno natural que abarca la sabana amazónica de la selva baja y los bosques nublados de la selva alta es un sitio turístico ideal para: caminar en la selva virgen, observar abundante flora y fauna en su estado natural, escuchar el gran abanico de sonidos de la naturaleza, conectarte con el entorno natural y encontrarte contigo mismo.'
            , 
            'El río Amazonas es el río más largo y caudaloso de la tierra y una de las mayores reservas de agua dulce del planeta. Nace en las cumbres nevadas de la cordillera de los Andes y recorre más de 7200 kilómetros, atravesando los territorios de Perú, Colombia y Brasil.

            En la cuenca del río Amazonas se desarrollan impresionantes ecosistemas naturales y numerosas comunidades nativas: boras, yahuas, witotos y muchos otros.
            
            La ciudad de Iquitos es el lugar más privilegiado para apreciar la belleza del río Amazonas. Pues, aquí están ubicados la mayoría de los miradores turísticos, lodges, plataformas flotantes, puentes colgantes y puentes pluviales para navegar por el río Amazonas.'
            ,
            'Es un espacio natural que protege las formaciones geológicas, nevados, lagunas, flora, fauna y los variados ecosistemas de la Cordillera Blanca, la cordillera tropical más extensa del mundo. El año 1985 fue declarado Patrimonio Natural de la Humanidad.

            El Parque Nacional del Huascarán sobresale por su belleza paisajística, sus innumerables picos nevados que se alzan por encima de los 6000 msnm.
            
            Entre las zonas turísticas más increíbles, que no puedes dejar de visitar en este Parque Nacional, se encuentran: el nevado de Huascarán (6768 msnm), el nevado Alpamayo (5947 msnm), la laguna Llanganuco y la laguna 69.
            
            Por otro lado, el Parque Nacional del Huascarán también es una importante ruta de turismo de aventura donde podrás hacer trekking, escalada de hielo y roca, ciclismo de montaña. Pues, acoge 25 circuitos y 102 lugares de escalada en roca y hielo. Además, en este importante destino turístico también podrás: visitar 33 sitios arqueológicos prehispánicos, y observar 112 especies de aves, 13 especies de mamíferos, el oso de anteojos y la puya Raimondi (bromeliácea más grande que una sola vez, antes de morir, florece 18000 flores y produce 6 millones de semillas).'
            , 
            'Las lagunas Llanganuco son dos espejos de aguas de color turquesa y celeste. Están ubicados en un estrecho valle glaciar del Parque Nacional de Huascarán, entre los Nevados Huascarán (6768 msnm) y Huandoy (6160 msnm), en Yungay – Ancash. Es uno de los destinos naturales más importantes de la sierra peruana.

            Llanganuco está conformado por dos lagunas: Chinancocha (laguna hembra) y Orconcocha (laguna macho). Sus aguas son producto del deshielo de los nevados Huascarán, Huandoy, Yanapaccha, Pisco y Chopicalqui.
            
            La laguna Chinancocha tiene 1450 metros de longitud, 393 metros de ancho y 28 metros de profundidad. Sus aguas tienen una coloración turquesa y está rodeado de variada biodiversidad. Y es la laguna más visitada. En cambio, la laguna Orconcocha tiene 910 metros de longitud, 368 metros de ancho y 7 metros de profundidad. Está rodeada de abundante flora y fauna silvestre, y por ello está prohibida la navegación en sus aguas de color celeste.
            
            Las lagunas Llanganuco son un entorno natural ideal para practicar windsurf, pasear en caballo o bote, fotografiar los impresionantes paisajes naturales, degustar platos típicos, realizar caminatas, acampar y observar la exótica flora y fauna.'
            ,
            'Es un extenso valle de clima templado que se extiende a ambos lados del río Urubamba. Se caracteriza por su clima templado y por sus fértiles tierras dónde se produce el mejor maíz del mundo y muchas especies de hortalizas.

            En las inmediaciones del Valle Sagrado de los Incas están ubicados los principales complejos arqueológicos de la ciudad de Cusco: Pisac, Ollantaytambo, Moray, Salineras y Chinchero. Asimismo, aquí están ubicados los pueblos tradicionales más importantes de Cusco (Pisac, Maras, Ollantaytambo y Chinchero), donde aún se conservan y practican el legado cultural de los incas.
            
            El Valle Sagrado de los Incas es un sitio ideal para descansar y degustar la rica gastronomía cuzqueña, pues aquí están ubicados los restaurantes y hoteles turísticos más importantes de Cusco. También es un sitio de paso obligado para quienes viajan a Machu Picchu, porque acoge a dos estaciones de trenes: Ollantaytambo y Urubamba.'
            , 
            'La Montaña Sagrada de Vinicunca o Montaña 7 Colores es el segundo destino turístico más visitado de Cusco. Y según el sitio web Business Insider, es uno de 100 viajes que todo el mundo debería hacer una vez en la Vida.

            Está ubicado entre las formaciones montañosas que rodean al nevado Ausangate, en la cordillera de los Andes, a una altitud de 5200 msnm.
            
            La orogénesis de esta mágica montaña se debe a complejos motivos geomorfológicos y es un claro ejemplo de los efectos del calentamiento global. Pues la montaña surgió producto de la desglaciación.
            
            En tu viaje a la Montaña de 7 Colores, podrás: percibir las franjas de colores (tonos de morado, verde, amarillo, rosado y otras variaciones) que se distingue en sus cumbres y laderas; observar los impresionantes paisajes andinos que se divisan desde la cima de sus cumbres; y disfrutar de la adrenalina y la aventura en la ruta de trekking más concurrida de Cusco.'
            , 
            'El Camino Inca a Machu Picchu es una de las rutas de trekking más hermosas y concurridas de América y del mundo. Forma parte de la red del Qhapaq Ñan, la antigua red vial de los incas que medía más de 20000 km y se extendía a lo largo y ancho del Tahuantinsuyo. Actualmente, la ruta de trekking empieza en el kilómetro 82, de la línea férrea Cusco – Machu Picchu, y tiene un recorrido de 43 km que se recorren en 4 días.

            A lo largo del Camino Inca están ubicados impresionantes paisajes naturales (cumbres nevados, valles, arroyos, bosques…) y numerosos complejos arqueológicos (Llactapata, Runkurakay, Saycamarca, Phuyupatamarca y Wiñaywayna). Del mismo modo, en la ruta también se pueden apreciar variados ecosistemas, diversas variedades de orquídeas y aves multicolores.
            
            El destino final del Camino Inca es la ciudad inca de Machu Picchu. Pero, antes de arribar a la ciudad inca, se hace una parada en Inti Punku, lugar desde donde podrás apreciar, en toda su inmensidad: la ciudad sagrada de Machu Picchu, el río Urubamba, las Montañas Machu Picchu y Huayna Picchu y los impresionantes paisajes naturales que rodean Machu Picchu.'
            , 
            'La Reserva Nacional de Tambopata es un área natural protegida dónde se conservan la flora, la fauna y los procesos ecológicos de la selva húmeda tropical. Es un sitio turístico ideal para visitar en familia; pues aquí podrán conectarse con la naturaleza y observar la flora, fauna y los paisajes naturales.

            Está ubicado en la cuenca del río Tambopata, contiguo al Parque Nacional Bahuaja Sonene.
            
            En los innumerables aguajales, pantanos, pacales, bosques ribereños de la cuenca de Tambopata se puede observar los mayores índices de diversidad biológica en el mundo: 632 especies de aves, 1200 especies de mariposas, 103 especies de anfibios, 180 especies de peces, 169 especies de mamíferos y 103 especies de reptiles. También, la reserva sirve de paradero a más de 40 especies de aves migratorias transcontinentales.
            
            Los principales atractivos turísticos a visitar en Tambopata, son: el lago Sandoval, los lagos Cocococha y Sachavacayoc, y las collpas Chuncho y Colorado.'
            ,
            'El lago Sandoval es un meandro que está ubicado en la cuenca del río Madre de Dios. Este mágico espejo de agua está rodeado de exuberante flora y fauna. Entre las principales especies que podrás observar aquí, están: guacamayos, garzas, martín pescador, caimanes y nutrias.

            En los alrededores del Salgo Sandoval hay varios lodges donde podrás pernoctar y practicar variadas actividades turísticas: kayaking, zipline, pesca, caminatas a la collpa de los loros y observación de monos en la Isla de los Monos.'
            ,
            'La Catarata de Gocta es una impresionante caída de agua de 771 metros que está rodeado de exuberante vegetación, encanto y misticismo. Es la tercera catarata más alta de Perú y el decimoquinto más alto del mundo. Está ubicado en las cercanías de los poblados de Cocachimba o San Pablo. También es conocido, por los lugareños, como La Chorrera.

            El impresionante salto de agua tiene dos niveles, el primero de 231 metros y el segundo de 540 metros, haciendo un total de 771 metros. En el trayecto a la catarata se puede observar 22 cataratas, especies de flora y fauna, entre las que destacan: el gallito de las rocas, el colibrí cola de espátula, el tucán andino y el oso de anteojos. Y es un destino turístico recomendado para los aventureros que aman el trekking y desean conectarse con la naturaleza.'
            ,
            'La Laguna de Huacachina es un oasis en medio del desierto de Ica que está rodeado de dunas, eucaliptos, palmeras y huarangos. También es conocido como el Oasis de América.

            De todos los lugares para visitar en Perú, este es el lugar más recomendado para viajar en pareja o con la familia, incluso con niños. Pues aquí podrás disfrutar del radiante sol, viajar en buggy, practicar sandboarding y pasear en botes a pedal.
            
            Este bonito lugar, lleno de magia y misticismo, también es un lugar de paso para los viajeros que se dirigen hacia las líneas de Nazca, Arequipa, Puno y Cusco.
            
            A las aguas de color verduzco de Huacachina, que provienen de afloraciones subterráneas, antaño se le atribuía muchas propiedades curativas. Por ello, hoy, aunque luce algo abandonada, no deja de ser uno de los más bellos y vistosos lugares del Perú.'
            ,
            'Es un área protegida que abarca una porción de la eco región del golfo de Guayaquil, 2972 hectáreas de bosque de manglar. Está ubicado en la provincia de Zarumilla.

            Dentro del Santuario Nacional los Manglares de Tumbes se encuentran los paisajes turísticos más hermosos del norte peruano: islotes, canales, manglares. Asimismo, este entorno natural es el hogar de 4 especies de mangle (rojo, salado, blanco y botón), 40 variedades botánicas y más de 200 especies de aves, muchas de ellas en peligro de extinción. Entre las especies que más destacan se encuentran: aves (garzas y fragatas), peces, crustáceos, moluscos y mamíferos (como el oso manglero y la nutria del noroeste).
            
            Por otro lado, los Manglares de Tumbes también sirven como un recurso hidrobiológico a las poblaciones locales que encuentran sus alimentos dentro de los manglares: cangrejo de manglar, conchas negras y langostinos.
            
            Este lugar turístico es ideal para hacer trekking, observar vida silvestre y practicar la fotografía. Sin embargo, hay que tener en cuenta que, para ingresar a los manglares, es necesario hacerlo en canoas o kayak, y disponer al menos de dos días para apreciar los manglares durante la marea alta y baja.'
            ,
            'La playa Las Pocitas es la playa más tranquila y hermosa de Perú. Está ubicado a tres kilómetros de Máncora, en la ciudad de Piura. Geográficamente, se llama Máncora Chico; sin embargo, debido a sus características naturales, todos le conocen como Playa Pocitas o Pocitas. Su nombre se debe a los pozos o piscinas naturales que se forman durante la marea baja.

            A la playa Las Pocitas se puede acceder en taxi o moto desde Máncora, Vichayito o desde Los Órganos.
            
            La playa está rodeada de un ambiente tranquilo y exclusivo. Asimismo, en los alrededores se encuentran ubicados bellas casas y hostales lujosos que destacan por sus palmeras y su bien cuidada vegetación.
            
            Pocitas es un lugar paradisíaco y acogedor, ideal para los viajes en pareja o con la familia. Ya que, aquí, los niños podrán divertirse a sus anchas en las pequeñas pozas que se forman durante la marea baja. Además (en sus amplias playas llenas de arena blanca, sol y perfectas olas), también podrás relajarte, apreciar las vistas más espectaculares, tomar sol, degustar la deliciosa gastronomía a base de productos marinos.'
            ,
            'Chan Chan es la ciudad de adobe más grande de América y la segunda del mundo. Fue construido por los chimúes, cultura pre inca que se desarrolló en la costa norte de Perú, alrededor de los años 900 y 1300 d.C. Está ubicado en el valle de Moche, entre el balneario de Huanchaco y la ciudad de Trujillo, en los distritos de Trujillo y Huanchaco.

            El complejo arqueológico de Chan Chan abarca 20 hectáreas de extensión. Y está formado por diez pequeñas ciudades amuralladas, en cuyas paredes resaltan los decorados en alto relieve de figuras geométricas, peces y aves. Chan Chan fue la capital administrativa de la cultura Chimú que llegó a acoger entre veinte mil y treinta mil habitantes.
            
            La ciudadela de Chan Chan está conformada por palacios, centros administrativos, residencias de élite, templos, mausoleos de los gobernantes Chimú, barrios populares, canales, veredas y cementerios.
            
            Por su impresionante arquitectura, gran trascendencia y valor histórico fue declarado Patrimonio Cultural de la Humanidad.'
            ,
            'El Museo Tumbas Reales de Sipán es una réplica funeraria exacta de la cámara funeraria del Señor de Sipán, antiguo gobernante mochica del siglo III. El museo cuenta con tres niveles donde se exhibe y resguarda más de 2000 piezas de oro, joyas, cerámicas y ajuares funerarios. Entre los restos y piezas culturales más importantes, que pertenecieron a este gobernante del antiguo Perú, resaltan: ornamentos, emblemas, atuendos, estandartes de cobre, corona de cobre, pectorales de conchas, orejeras de oro y turquesa, sonajeras de oro, tocado del algodón y adornos de plumas.'
            ,
            'Es un hermoso balneario que está ubicado en la provincia de Contralmirante Villar, a 80 km de la ciudad de Tumbes. Es considerada como una de las playas más hermosas y extensas del norte peruano. Destaca por sus aguas tranquilas y cálidas (por encima de los 20 °C.), arena fina durante la marea baja, olas suaves y sol brillante durante los 365 días del año.

            El balneario de Punta Sal está rodeado de abundante biodiversidad. Incluso se puede observar delfines y ballenas jorobadas entre los meses de julio y octubre.'
            ,
            'El Monasterio o Convento de Santa Catalina es el complejo turístico religioso más importante de Arequipa y de Perú. Está ubicado en el Centro Histórico de Ciudad Blanca de Arequipa. Según la opinión de muchos viajeros, el monasterio es una pequeña ciudadela dentro de una ciudad. Este emblemático e histórico complejo religioso fue construido alrededor de los años 1580, como Monasterio de Monjas Privado de la Orden de Santa Catalina de Siena, para albergar a las hijas de las familias más distinguidas de Arequipa.'
            ,
            'El sitio arqueológico de Chavín está ubicado en el distrito Chavín de Huántar, provincia de Huari, región Ancash. Fue el centro administrativo de la cultura Chavín (1500 – 300 a.C.) y el santuario religioso más importante de la época pre inca, al que acudían los antiguos peruanos para recibir las respuestas de sus divinidades y dejar las ofrendas a sus dioses.

            Este principal oráculo del antiguo Perú, ubicado en las faldas de la cordillera de los Andes, está conformada numerosas edificaciones de piedra y barro: pirámides truncas, portadas, escalinatas, caminos, galerías, templos, estrechos pasadizos y cámaras interiores. Dentro del complejo, las estructuras que más destacan son: la pirámide Tello, la Plaza Circular, la Plaza Rectangular, las Plataformas Norte y Sur Norte, el Nuevo y Viejo templo, el templo de las cabezas clavas y su deidad principal que está representado en el lanzón, un monolito esculpido en forma de una punta de una lanza de casi cuatro metros de alto'
            ,
            'Es la reserva más extensa de la Amazonia Peruana. Está ubicado entre las provincias de Requena, Alto Amazonas y Ucayali, en la región Loreto. Abarca las cuencas de Pacaya, Samiria y Yanayacu-Pucate. Tiene una superficie de 2 080 000 hectáreas donde se conservan ecosistemas representativos de la selva baja, preservan la diversidad genética, protegen algunas especies en peligro de extinción (lagarto negro, lobo de río y paiche) y fomentan los estudios de flora y fauna.'
            ,
            'Huanchaco es un histórico balneario que está ubicado en el distrito de Huanchaco, a 13 km de la ciudad de Trujillo. Actualmente, forma parte de la Ruta Moche. Es el balneario más visitado de la ciudad de Trujillo.

            El 26 de octubre fue reconocido como la Reserva Mundial del Surf, pues fue y es escenario de competencias internacionales de surf.'
            ,
            'Los Baños del Inca es un balneario de aguas termo medicinales que posee propiedades curativas para tratar afecciones al sistema nervioso, huesos, piel, gastritis y otros.

            Este importante destino turístico, muy visitado por los turistas que viajan en familia a relajarse o desean disfrutar de las propiedades terapéuticas de sus aguas, está ubicado en el Balneario de Pultumarca, a 6 km de la ciudad de Cajamarca.'
            ,
            'La ruta de trek Salkantay – Machu Picchu, es una de las rutas de senderismo más famosas de América y del Mundo. Es considerada, por muchos aventureros, como la alternativa perfecta al camino inca clásico a Machu Picchu. Por esta razón, el año 2017 fue reconocido como una de las 25 mejores rutas de excursiones en el mundo.

            El trayecto de 65 km está rodeado de innumerables cumbres nevadas, lagunas, arroyos, quebradas. Asimismo, ambos lados del ancestral camino inca son ribeteados por una densa vegetación de la ceja de selva donde viven innumerables especies animales.'
            ,
            'Huaca Pucllana es un antiguo centro ceremonial precolombino construido con adobes, cantos rodados y arena. Fue edificado por la cultura Lima (200 y 700 d.C.). como residencia de una élite sacerdotal que controlaba el poder político, religioso y económico. Por este motivo, muchos estudiosos lo consideran como un templo.

            El sitio arqueológico de Huaca Pucllana está dividido en dos zonas: la Gran Pirámide y la zona baja. La Gran Pirámide alargada tiene más de 400 metros de largo y 22 metros de alto; cuenta con siete plataformas donde se encuentran plazas, recintos y pasadizos; y estuvo destinada como lugar de culto. En cambio, la parte baja, de construcción más reciente, acoge plazas y sistemas de recintos; y se cree que estuvo destinado a actividades más cotidianas o relacionadas con el trato directo con la población. Además, también cuenta con una sala de exposiciones, circuito de visitas y otros sitios turísticos.'
        ];

        //Agregar Imagen a la tabla
        $imagen = [
            'https://travel1tours.com/wp-content/uploads/2019/09/Machu-Picchu-lugares-turisticos-peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Valle-de-Colca-Peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Choquequirao-lugares-turisticos-peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Lineas-de-Nazca-lugares-turisticos-peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Kuelap-lugares-turisticos-Peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Paracas-lugares-turisticos-Peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Islas-Ballestas-lugares-turisticos-peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Caral-lugares-turisticos-peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Lago-Titicaca-lugares-turisticos-Peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Manu-lugares-turisticos-Peru-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/09/Rio-Amazonas-lugares-turisticos-peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Huascaran-Lugares-turisticos-Peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/11/Lagunas-de-Llanganuco-Ancash-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/09/Valle-Sagrado-lugares-turisticos-Peru-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/09/Montana-7-Colores-Lugares-turisticos-Peru-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/09/Camino-Inca-lugares-turisticos-Peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Tambopata-lugares-turisticos-Peru-300x188.jpg'
            ,
            'https://travel1tours.com/wp-content/uploads/2019/09/Lago-Sandoval-lugares-turisticos-Peru-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/09/Gocta-lugares-turisticos-Peru-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/09/Huacachina-lugares-turisticos-Peru-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/manglares-de-tumbes-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Playa-Pocitas-Mancora-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Ciudadela-de-Chan-Chan-la-Libertad-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Tumbas-Reales-de-Sipan-Chiclayo-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Punta-Sal-Tumbes-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Monasterio-de-Santa-Catalina-Arequipa-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Chavin-de-Huantar-Ancash-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Pacaya-Samiria-Loreto-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Huanchaco-Trujillo-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Banos-del-Inca-Cajamarca-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Salkantay-Cusco-300x188.jpg'
            , 
            'https://travel1tours.com/wp-content/uploads/2019/11/Huaca-Pucllana-Lima-300x188.jpg'
        ];

        for($i=0; $i<32; $i++){
            DB::table('lugares')->insert([
                'id_infoLugar'=>$idinfoLugar[$i],
                'nombre'=>$nombre[$i],
                'id_categoria'=>$categoria[$i],
                'descripcion'=>$descripcion[$i],
                'imagen'=>$imagen[$i]
            ]);
        }
    }
}

