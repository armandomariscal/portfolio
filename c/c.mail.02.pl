check_email();
exit;

sub check_email {
    print "Connecting\n" if ($DEBUG);

    my $dbh = DBI->connect( "dbi:mysql:".$db, $db_user, $db_pass,
                            {RaiseError => 1, AutoCommit=>1}) or die "Can't Connect to database.";

    my $Pop = new Mail::POP3Client(
        USER     => $user,
        PASSWORD => $pass,
        HOST     => $host,
        PORT     => $port,
        USESSL   => 'true',
        DEBUG     => 0,
        );
