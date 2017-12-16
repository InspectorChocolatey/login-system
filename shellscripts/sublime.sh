function testdir()
{
	[ -d $1 ] && echo "True" || echo "False";
}

function installsublime()
{
	url="http://c758482.r82.cf2.rackcdn.com/sublime-text_build-3047_amd64.deb";
	path="/$USER/Desktop";
	cd $path;	
	wget $url;	
	sudo dpkg -i sublime-text_build-3047_amd64.deb;
	path="/opt/sublime_text";
	test=$(testdir $path);
# test is used as the test for if sublime is installed; 
	[ $test != "True" ] && installsublime || echo "install found"; 
}

function sublime()
{
	pwd="$PWD";
	cd "/opt/sublime_text/";
	./sublime_text;
	cd "$pwd";
}

installsublime;

sublime;
