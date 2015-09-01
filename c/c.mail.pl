#!/usr/bin/perl

use strict;

use Mail::POP3Client;
use IO::Socket::SSL;
use Email::MIME;
use HTML::FormatText;
use Encode;
use DBI;
use HTML::TreeBuilder;

my $DEBUG = 1;
