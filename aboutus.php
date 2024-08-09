<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
                <h1>Benesere Farma</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#mision">Misión</a></li>
                    <li><a href="#vision">Visión</a></li>
                    <li><a href="#objetivos">Objetivos</a></li>
                    <li><a href="#valores">Valores</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container content">
        <section id="mision">
            <h2>Misión</h2>
            <p>En Benesere Farma, nuestra misión es proporcionar a la comunidad acceso a productos farmacéuticos de alta calidad y servicios de salud excepcionales. Nos dedicamos a mejorar la calidad de vida de nuestros clientes a través de un enfoque centrado en el bienestar, la innovación y la educación continua. Creemos que la salud es un derecho fundamental y trabajamos incansablemente para garantizar que cada persona reciba el cuidado y la atención que merece.</p>
            <p>Nuestra farmacia se compromete a:</p>
            <ul>
                <li><strong>Suministrar Medicamentos Seguros y Efectivos:</strong> Garantizamos que todos nuestros productos cumplen con los más altos estándares de calidad y seguridad. Trabajamos en estrecha colaboración con proveedores y fabricantes acreditados para asegurar la autenticidad y eficacia de los medicamentos que ofrecemos.</li>
                <li><strong>Brindar Servicios Personalizados de Atención al Cliente:</strong> Nuestro equipo de farmacéuticos y personal de apoyo está dedicado a proporcionar una atención personalizada, respondiendo a las necesidades individuales de cada cliente. Ofrecemos asesoramiento profesional y consultas para asegurar un uso adecuado y seguro de los medicamentos.</li>
                <li><strong>Fomentar la Educación en Salud:</strong> Creemos en el poder de la educación para mejorar la salud y el bienestar. Proporcionamos recursos educativos, talleres y seminarios sobre temas de salud relevantes, empoderando a nuestros clientes con el conocimiento necesario para tomar decisiones informadas sobre su salud.</li>
                <li><strong>Promover el Bienestar General:</strong> Más allá de los medicamentos, nos enfocamos en una visión holística del bienestar, ofreciendo productos de salud y belleza, suplementos nutricionales y alternativas naturales que apoyan un estilo de vida saludable.</li>
            </ul>
        </section>

        <section id="vision">
            <h2>Visión</h2>
            <p>Nuestra visión en Benesere Farma es ser reconocidos como la farmacia líder en nuestra comunidad y más allá, conocida por nuestra dedicación a la excelencia en el cuidado de la salud, la innovación y el servicio al cliente. Aspiramos a ser un pilar en la comunidad, contribuyendo al bienestar general y marcando una diferencia positiva en la vida de las personas.</p>
            <p>Nos proponemos:</p>
            <ul>
                <li><strong>Ser Pioneros en Innovación Farmacéutica:</strong> Buscamos estar a la vanguardia de la innovación en el campo farmacéutico, incorporando nuevas tecnologías y enfoques para mejorar la dispensación de medicamentos y la atención al cliente.</li>
                <li><strong>Expandir Nuestro Alcance y Accesibilidad:</strong> Queremos que nuestros servicios y productos sean accesibles para todos, independientemente de su ubicación o situación económica. Planeamos expandir nuestra presencia a través de nuevas sucursales y opciones de entrega a domicilio, así como mediante una plataforma en línea robusta y fácil de usar.</li>
                <li><strong>Fortalecer Nuestras Alianzas:</strong> Continuaremos desarrollando alianzas estratégicas con proveedores, organizaciones de salud y la comunidad en general para promover iniciativas de salud pública y mejorar el acceso a servicios de salud esenciales.</li>
                <li><strong>Inspirar Confianza y Lealtad:</strong> Buscamos construir relaciones duraderas con nuestros clientes basadas en la confianza, la transparencia y la empatía. Nos esforzamos por ser una fuente confiable de asesoramiento y apoyo en todas las etapas de la vida de nuestros clientes.</li>
            </ul>
        </section>

        <section id="objetivos">
            <h2>Objetivos</h2>
            <p>Para cumplir con nuestra misión y avanzar hacia nuestra visión, Benesere Farma ha establecido los siguientes objetivos estratégicos:</p>
            <ul>
                <li><strong>Mejorar la Experiencia del Cliente:</strong> Implementar un programa integral de formación continua para nuestro personal, asegurando que todos los empleados estén capacitados en las últimas prácticas de atención al cliente y conocimientos farmacéuticos. Desarrollar un sistema de retroalimentación para recoger y responder a las opiniones de los clientes, mejorando continuamente nuestros servicios.</li>
                <li><strong>Ampliar la Oferta de Servicios:</strong> Introducir servicios adicionales como la administración de vacunas, chequeos de salud preventivos y consultas de salud mental. Ofrecer programas de manejo de enfermedades crónicas, como la diabetes y la hipertensión, proporcionando apoyo continuo y seguimiento a los pacientes.</li>
                <li><strong>Optimizar la Cadena de Suministro:</strong> Implementar un sistema avanzado de gestión de inventarios para asegurar la disponibilidad continua de productos esenciales y minimizar el desperdicio. Establecer relaciones sólidas con proveedores clave para garantizar precios competitivos y productos de alta calidad.</li>
                <li><strong>Fomentar la Innovación y el Uso de la Tecnología:</strong> Desarrollar y mantener una aplicación móvil que permita a los clientes gestionar sus recetas, recibir recordatorios de medicación y acceder a recursos educativos. Implementar un sistema de dispensación automatizado para mejorar la eficiencia y precisión en la entrega de medicamentos.</li>
                <li><strong>Promover la Salud Comunitaria:</strong> Organizar y participar en eventos comunitarios de salud, como jornadas de salud, ferias de bienestar y campañas de concientización sobre enfermedades. Colaborar con organizaciones locales para ofrecer programas de salud y bienestar gratuitos o a bajo costo para comunidades desfavorecidas.</li>
                <li><strong>Garantizar la Sostenibilidad:</strong> Adoptar prácticas sostenibles en todas nuestras operaciones, incluyendo la reducción de residuos, el uso de materiales reciclables y la promoción de productos ecológicos. Trabajar para minimizar nuestra huella de carbono y contribuir a la protección del medio ambiente.</li>
                <li><strong>Incentivar el Desarrollo Profesional:</strong> Crear un ambiente de trabajo que fomente el desarrollo profesional y personal de nuestros empleados, ofreciendo oportunidades de formación, crecimiento y avance dentro de la organización. Reconocer y recompensar el desempeño excepcional y el compromiso con nuestra misión y valores.</li>
            </ul>
        </section>

        <section id="valores">
            <h2>Valores Fundamentales</h2>
            <p>Nuestros valores fundamentales son la base de todo lo que hacemos en Benesere Farma. Estos valores guían nuestras acciones, decisiones y la manera en que interactuamos con nuestros clientes, empleados y la comunidad en general. Nuestros valores son:</p>
            <ul>
                <li><strong>Integridad:</strong> Actuamos con honestidad y transparencia en todas nuestras interacciones, manteniendo altos estándares éticos y profesionales.</li>
                <li><strong>Empatía:</strong> Ponemos a las personas en el centro de todo lo que hacemos, mostrando compasión y comprensión hacia las necesidades y preocupaciones de nuestros clientes.</li>
                <li><strong>Excelencia:</strong> Nos esforzamos por superar las expectativas en todos los aspectos de nuestro servicio, buscando constantemente maneras de mejorar y innovar.</li>
                <li><strong>Responsabilidad:</strong> Asumimos la responsabilidad de nuestras acciones y sus impactos, trabajando para ser ciudadanos corporativos responsables y sostenibles.</li>
                <li><strong>Colaboración:</strong> Fomentamos un ambiente de trabajo colaborativo y apoyamos la cooperación con socios y la comunidad para alcanzar objetivos comunes.</li>
            </ul>
        </section>

        <section id="conclusion">
            <h2>Conclusión</h2>
            <p>Benesere Farma es más que una farmacia; es un socio comprometido en el viaje hacia una mejor salud y bienestar para todos. Con nuestra misión clara, visión ambiciosa y objetivos estratégicos bien definidos, nos dedicamos a marcar una diferencia significativa en la vida de nuestros clientes y en la comunidad en general. Creemos que, a través del trabajo duro, la dedicación y la pasión por el cuidado de la salud, podemos construir un futuro más saludable y próspero para todos.</p>
        </section>
    </div>
</body>
</html>
