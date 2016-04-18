<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AryaLinux</title>
<meta name="description" content="The HTML5 Herald">
<meta name="author" content="SitePoint">
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php include_once 'styles.php'?>
</head>
<body>
	<?php include_once('heading.php')?>
	<?php $currentPage="aboutAryaLinux.php"?>
	<?php include_once 'menu.php';?>
	<?php include_once 'banner.php';?>
	<?php include 'functions.php';?>
	<div class="full centered">
		<div class="quarter">
			<ul>
				<li><a href="aboutAryaLinux.php">About AryaLinux</a></li>
				<li><a href="history.php">A bit of History</a></li>
				<li><a href="faqs.php">FAQs</a></li>
				<li><a href="roadmap.php">Roadmap</a></li>
				<li><a href="#">Packages</a></li>
			</ul>
		</div>
		<div class="three-quarters">
			<h3>Frequently asked questions</h3>
			<a name="top"></a>
			<ul>
				<li><a href="#ans1">What is AryaLinux?</a></li>
				<li><a href="#ans2">Why build from scratch when you can easily
						remaster and customize a stable existing distro?</a></li>
				<li><a href="#ans3">Few things in AryaLinux are outdated. Why?</a></li>
				<li><a href="#ans4">What makes AryaLinux different from the others?
						Why should I put my money on it?</a></li>
				<li><a href="#ans5">What can I use AryaLinux for?</a></li>
				<li><a href="#ans6">What are these build scripts?</a></li>
				<li><a href="#ans7">Why the name Arya? Why is version 1.0 known as
						A15?</a></li>
				<li><a href="#ans8">What is the Package Manager in AryaLinux?</a></li>
			</ul>
			<p>
				<a name="ans1"></a>
			
			
			<h4>What is AryaLinux?</h4>
			<div style="text-align: justify;">AryaLinux is a GNU-Linux based
				operating system, with several open source applications for general
				purpose needs. AryaLinux has been compiled from scratch using
				instructions from the Linux From Scratch and Beyond Linux From
				Scratch books. Apart from the packages whose build instructions are
				provided as a part of these books, there are several packages that
				are a part of AryaLinux. These packages are installed using build
				scripts much like few other distros however AryaLinux is not
				compatible with any of them. The productivity version of AryaLinux
				comes with applications like Media Players, Office Productivity
				Suite, Internet Applications like browser, mail client, chat
				application, torrent downloader etc. Apart form these applications
				we have also put few applications of our own to help the end user in
				day to day computing needs.</div>
			<div style="text-align: right">
				<a href="#top">Go to top</a>
			</div>
			</p>
			<p>
				<a name="ans2"></a>
			
			
			<h4>Why build from scratch when you can easily remaster and customize
				a stable existing distro?</h4>
			<div style="text-align: justify;">There are several answers to this
				question and depending upon who is asking, one of the answer might
				sound reasonable to an individual. To begin with, remastering though
				might sound easier, it has its own problems unless you want to just
				change the wallpaper and themes and put some applications here and
				there. The challenges that lie ahead of remastering are equally
				great if not greater than when you build from scratch by compiling
				the source code. When you build from scratch, you end up placing
				each and every brick that builds up your mansion. You would have
				complete control over what your system would end up becoming. This
				is probably the biggest strengths of a distro that is based on
				compiling source code - you know everything that goes into building
				your system. Its more open in my opinion. Last but not the least
				building a distro this way is a great way of learning about
				operating systems. You would be surprised to know that its not
				rocket science at all. Plus we also understand that there is a large
				community out there who would not mind if their distro is compiled
				of remastered. All they want is a simple, easy to use and stable
				system and through our constant effort we make that possible through
				AryaLinux.</div>
			<div style="text-align: right">
				<a href="#top">Go to top</a>
			</div>
			</p>
			<p>
				<a name="ans3"></a>
			
			
			<h4>Few things in AryaLinux are outdated. Why?</h4>
			<div style="text-align: justify;">There is a thin line of difference
				between stable and outdated in the IT communities. A lot of times, a
				lot of projects reach a stage where they are stable and are pretty
				much what had been envisioned for them. They do what they are
				expected to do and they do it really well. Once such a stage is
				reached in a project's life, unless there is a real performance
				improvement or security concern that needs to be addressed, there is
				no pressing reason to come up with releases just to keep the thing
				going. Take Splashy for instance or sysvinit. The whole Linux world
				has by and large shifted towards, systemd and Plymouth because they
				are considered better. We tried bringing those elements into
				AryaLinux and faced challenges. Then there was a decision to make.
				Should we do what the rest of the world does or not? To answer that
				question we tried figuring out how much value addition we are doing
				to AryaLinux through the introduction of these things. That's what
				helped us consolidate our decision. In our opinion there are more
				pressing concerns that AryaLinux needed to address. So we went ahead
				with Splashy and sysvinit so that we can focus our efforts on
				greater concerns.</div>
			<div style="text-align: right">
				<a href="#top">Go to top</a>
			</div>
			</p>
			<p>
				<a name="ans4"></a>
			
			
			<h4>What makes AryaLinux different from the others? Why should I put
				my money on it?</h4>
			<div style="text-align: justify;">:-) Well, first of all AryaLinux is
				free(unless you are betting on AryaLinux vs __________(fill your
				favorite distro's name here)_____________. On a more serious note,
				what makes AryaLinux different from others is the fact that it puts
				raw power into your hands without the *conditions apply in small
				letters. If you want just a Linux, Arya can be it, if you want a
				power packed full fledged desktop/server, use the build scripts and
				make one of your own. If you have a radically different vision for
				an operating system, modify the bootscripts and you are all set to
				create your own distro. The amount of flexibility that Arya brings
				into engineering your system is rather overwhelming, in our opinion.
			</div>
			<div style="text-align: right">
				<a href="#top">Go to top</a>
			</div>
			</p>
			<p>
				<a name="ans5"></a>
			
			
			<h4>What can I use AryaLinux for?</h4>
			<div style="text-align: justify;">Well it's up to you. Use the build
				scripts and create a server or create a desktop to your liking. Or
				if you are game for it use the build scripts to build the next
				popular Operating System for Smartphones!</div>
			<div style="text-align: right">
				<a href="#top">Go to top</a>
			</div>
			</p>
			<p>
				<a name="ans6"></a>
			
			
			<h4>What are these build scripts?</h4>
			<div style="text-align: justify;">Build scripts are shell scripts
				that download, compile and install the source code of several
				packages that AryaLinux is comprised of. You need to see the build
				scripts to understand what they are and what they do.</div>
			<div style="text-align: right">
				<a href="#top">Go to top</a>
			</div>
			</p>
			<p>
				<a name="ans7"></a>
			
			
			<h4>Why the name Arya? Why is version 1.0 known as A15?</h4>
			<div style="text-align: justify;">Aryavarth is what India used to be
				called before the world started recognizing us as Bharat and India
				much later. This distro is dedicated to our great nation, one of the
				world's oldest civilization and seat of knowledge. Our vision with
				this version was to gift freedom to people and freedom for us is
				August 15. A15 derives that spirit of freedom that we all sense on
				the day of India's independence.</div>
			<div style="text-align: right">
				<a href="#top">Go to top</a>
			</div>
			</p>
			<p>
				<a name="ans8"></a>
			
			
			<h4>What is the Package Manager in AryaLinux?</h4>
			<div style="text-align: justify;">We use the ALPS(AryaLinux Packaging
				System) to build/install packages. Its unlike package managers in
				other distributions like rpm or apt, there is no provision for
				things like uninstalling, updating, upgrading etc, like most other
				package managers provide. Though its does a pretty good job at
				installing stuff, resolving dependencies and maintaining track of
				packages that are installed yet we still think there is heavy scope
				for improvement. In near future, we would be incorporating features
				into newer features into AryaLinux like DESTDIR method of
				installation, building of package binary tarballs etc.</div>
			<div style="text-align: right">
				<a href="#top">Go to top</a>
			</div>
			</p>

		</div>
	</div>
	<div style="clear: both"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<?php include_once 'footer.php';?>
</body>
</html>
