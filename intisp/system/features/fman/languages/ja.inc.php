<?php

//   -------------------------------------------------------------------------------
//  |                  net2ftp: a web based FTP client                              |
//  |              Copyright (c) 2003-2017 by David Gartner                         |
//  |                                                                               |
//  | This program is free software; you can redistribute it and/or                 |
//  | modify it under the terms of the GNU General Public License                   |
//  | as published by the Free Software Foundation; either version 2                |
//  | of the License, or (at your option) any later version.                        |
//  |                                                                               |
//   -------------------------------------------------------------------------------

//   -------------------------------------------------------------------------------
//  | For credits, see the credits.txt file                                         |
//   -------------------------------------------------------------------------------
//  |                                                                               |
//  |                              INSTRUCTIONS                                     |
//  |                                                                               |
//  |  The messages to translate are listed below.                                  |
//  |  The structure of each line is like this:                                     |
//  |     $message["Hello world!"] = "Hello world!";                                |
//  |                                                                               |
//  |  Keep the text between square brackets [] as it is.                           |
//  |  Translate the 2nd part, keeping the same punctuation and HTML tags.          |
//  |                                                                               |
//  |  The English message, for example                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is written in PHP!";    |
//  |  should become after translation:                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp est ecrit en PHP!";     |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is geschreven in PHP!"; |
//  |                                                                               |
//  |  Note that the variable starts with a dollar sign $, that the value is        |
//  |  enclosed in double quotes " and that the line ends with a semi-colon ;       |
//  |  Be careful when editing this file, do not erase those special characters.    |
//  |                                                                               |
//  |  Some messages also contain one or more variables which start with a percent  |
//  |  sign, for example %1\$s or %2\$s. The English message, for example           |
//  |     $messages[...] = ["The file %1\$s was copied to %2\$s "]                  |
//  |  should becomes after translation:                                            |
//  |     $messages[...] = ["Le fichier %1\$s a �t� copi� vers %2\$s "]             |
//  |                                                                               |
//  |  When a real percent sign % is needed in the text it is entered as %%         |
//  |  otherwise it is interpreted as a variable. So no, it's not a mistake.        |
//  |                                                                               |
//  |  Between the messages to translate there is additional PHP code, for example: |
//  |      if ($net2ftp_globals["state2"] == "rename") {           // <-- PHP code  |
//  |          $net2ftp_messages["Rename file"] = "Rename file";   // <-- message   |
//  |      }                                                       // <-- PHP code  |
//  |  This code is needed to load the messages only when they are actually needed. |
//  |  There is no need to change or delete any of that PHP code; translate only    |
//  |  the message.                                                                 |
//  |                                                                               |
//  |  Thanks in advance to all the translators!                                    |
//  |  David.                                                                       |
//  |                                                                               |
//   -------------------------------------------------------------------------------


// -------------------------------------------------------------------------
// Language settings
// -------------------------------------------------------------------------

// HTML lang attribute
$net2ftp_messages["en"] = "ja";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "euc-jp";

// -------------------------------------------------------------------------
// Messages
// -------------------------------------------------------------------------

$net2ftp_messages["%1\$s File"] = "%1\$s �ե�����";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(����: ����ʬ�Υɥᥤ����ͭ���Ƥ����ʤ����ˤϡ����Υ�󥯤ϵ�ǽ���ޤ���)";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> �� <b>%2\$s</b> �˲�̾���뤳�ȤϤǤ��ޤ���";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> �� <b>%2\$s</b> �˲�̾����ޤ���";
$net2ftp_messages["ARC archive"] = "ARC ����������";
$net2ftp_messages["ARJ archive"] = "ARJ ����������";
$net2ftp_messages["ASP script"] = "ASP ������ץ�";
$net2ftp_messages["Action"] = "���������";
$net2ftp_messages["Actions"] = "���";
$net2ftp_messages["Add another"] = "�ɲ�";
$net2ftp_messages["Admin functions"] = "�����ѵ�ǽ";
$net2ftp_messages["Adobe Acrobat document"] = "Adobe Acrobat �ɥ������";
$net2ftp_messages["Advanced"] = "��ĥ��ǽ";
$net2ftp_messages["Advanced FTP functions"] = "��ĥ FTP ��ǽ";
$net2ftp_messages["Advanced functions"] = "��ĥ��ǽ";
$net2ftp_messages["Advanced login"] = "Advanced login";
$net2ftp_messages["All"] = "����";
$net2ftp_messages["All the selected directories and files have been processed."] = "���򤵤줿���٤ƤΥǥ��쥯�ȥꡢ�ե�����ν�������λ���ޤ�����";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "���򤵤줿�ǥ��쥯�ȥ���Υ��֥ǥ��쥯�ȥ�ȥե������������ޤ�!";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternatively, use net2ftp's normal upload or upload-and-unzip functionality.";
$net2ftp_messages["An error has occured"] = "���顼�Ǥ�";
$net2ftp_messages["Anonymous"] = "ƿ̾";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "�ե������ĥ�Ҥ�Ƚ����ǽ�ʤ��ᡢ���̥ե����� <b>%1\$s</b> �Ͻ�������ޤ���Ǥ��������ߥ��ݡ��Ȥ���Ƥ��밵�̥ե������ zip, tar, tgz, gz �����Ǥ���";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Archives"] = "���̥ե�����";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "���������Ϥ������̥ե����뤬���व�졢��Υե����뤬 FTP �����Ф�ž������ޤ���";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "�����Υե�����������Ƥ��������Ǥ���?";
$net2ftp_messages["Ascending order"] = "����";
$net2ftp_messages["Automatic"] = "��ư";
$net2ftp_messages["Back"] = "���";
$net2ftp_messages["Basic FTP login"] = "Basic FTP login";
$net2ftp_messages["Basic SSH login"] = "Basic SSH login";
$net2ftp_messages["Bitmap file"] = "BMP ���᡼��";
$net2ftp_messages["Bookmark"] = "�֥å��ޡ���";
$net2ftp_messages["Calculate the size of the selected entries"] = "���򤵤줿����ȥ�Υե����륵������׻�";
$net2ftp_messages["Cascading Style Sheet"] = "CSS �������륷����";
$net2ftp_messages["Case sensitive search"] = "�ܺٸ���";
$net2ftp_messages["Changing the directory"] = "�ǥ��쥯�ȥ���ѹ����Ƥ��ޤ�";
$net2ftp_messages["Changing to the directory %1\$s: "] = "�ǥ��쥯�ȥ� %1\$s ���ѹ���: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Check the SSH server's public key fingerprint"] = "Check the SSH server's public key fingerprint";
$net2ftp_messages["Checking files"] = "�ե���������å��򤷤Ƥ��ޤ�";
$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "PHP �� FTP�⥸�塼�뤬���󥹥ȡ��뤵��Ƥ��뤫Ĵ�٤Ƥ��ޤ�: ";
$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "web�����о�Υǥ��쥯�ȥ�ε��ľ����Ĵ�٤Ƥ��ޤ�: /temp �ե�����˾����ʥե����뤬��������ޤ�������Ǻ������ޤ���";
$net2ftp_messages["Chmod"] = "���ľ�����ѹ�";
$net2ftp_messages["Chmod also the files within this directory"] = "���Υǥ��쥯�ȥ����Υե�������ѹ�";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "���Υǥ��쥯�ȥ����Υ��֥ǥ��쥯�ȥ���ѹ�";
$net2ftp_messages["Chmod directories and files"] = "�ǥ��쥯�ȥ�ȥե�����ε��ľ�����ѹ�";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "���򤵤줿����ȥ�ε��ľ�����ѹ���Unix/Linux/BSD �����ФΤ�ͭ����";
$net2ftp_messages["Choose"] = "����";
$net2ftp_messages["Choose a directory"] = "�ǥ��쥯�ȥ������";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "����å������ %1\$s �Ǿ��祽����";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "����å������ %1\$s �ǹ߽祽����";
$net2ftp_messages["Closing the file: "] = "�ե�������Ĥ��Ƥ��ޤ�: ";
$net2ftp_messages["Connecting to a test FTP server: "] = "�ƥ�����FTP�����Ф���³��: ";
$net2ftp_messages["Connecting to the FTP server"] = "FTP�����Ф���³���Ƥ��ޤ�";
$net2ftp_messages["Connecting to the FTP server: "] = "FTP�����Ф���³��: ";
$net2ftp_messages["Connection settings:"] = "��³����:";
$net2ftp_messages["Continue"] = "³����";
$net2ftp_messages["Copied file %1\$s"] = "Copied file %1\$s";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "�ե����� <b>%1\$s</b> �򥳥ԡ�";
$net2ftp_messages["Copy"] = "���ԡ�";
$net2ftp_messages["Copy directories and files"] = "�ǥ��쥯�ȥ�ȥե�����Υ��ԡ�";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �Υ��ԡ���:";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "�ե����� <b>%1\$s</b> �Υ��ԡ���:";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "����ܥ�å���� <b>%1\$s</b> �Υ��ԡ���:";
$net2ftp_messages["Copy the selected entries"] = "���򤵤줿����ȥ�򥳥ԡ�";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Copying the net2ftp installer script to the FTP server";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Could not connect to SSH server"] = "Could not connect to SSH server";
$net2ftp_messages["Could not copy file %1\$s"] = "Could not copy file %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Could not create directory %1\$s";
$net2ftp_messages["Could not generate a temporary file."] = "����ե�������������뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Could not get fingerprint"] = "Could not get fingerprint";
$net2ftp_messages["Could not get public host key"] = "Could not get public host key";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Create a new file in directory %1\$s"] = "�ǥ��쥯�ȥ� %1\$s �˿������ե���������";
$net2ftp_messages["Create a website easily using ready-made templates"] = "�����Υƥ�ץ졼�Ȥ����Ѥ��ƴ�ñ�� web�����Ȥ����";
$net2ftp_messages["Create new directories"] = "�����ǥ��쥯�ȥ�κ���";
$net2ftp_messages["Create the MySQL database tables"] = "MySQL �ǡ����١����ơ��֥�κ���";
$net2ftp_messages["Created directory %1\$s"] = "Created directory %1\$s";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "�оݤΥ��֥ǥ��쥯�ȥ� <b>%1\$s</b> �����";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Creating a temporary directory on the FTP server";
$net2ftp_messages["Creating filename: "] = "�ե�����̾�������: ";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "1�������¤���ã: �ե����� <b>%1\$s</b> ��ž������ޤ���";
$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "1����ž�����¤���ã: �ǡ�����ž�����뤳�ȤϤǤ��ޤ���";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";
$net2ftp_messages["Date from:"] = "��������:";
$net2ftp_messages["Dear,"] = "Dear,";
$net2ftp_messages["Decompressing archives and transferring files"] = "���������֤���ष���ե������ž�����Ƥ��ޤ�";
$net2ftp_messages["Default"] = "�ǥե����";
$net2ftp_messages["Delete"] = "���";
$net2ftp_messages["Delete directories and files"] = "�ǥ��쥯�ȥ�ȥե�����κ��";
$net2ftp_messages["Delete the selected entries"] = "���򤵤줿����ȥ����";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "�ե����� <b>%1\$s</b> ����";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "���֥ǥ��쥯�ȥ� <b>%1\$s</b> ����";
$net2ftp_messages["Deleting the file: "] = "�ե�����������Ƥ��ޤ�: ";
$net2ftp_messages["Descending order"] = "�߽�";
$net2ftp_messages["Details"] = "�ܺ�";
$net2ftp_messages["Different target FTP server:"] = "�̤��о� FTP ������:";
$net2ftp_messages["Directories"] = "�ǥ��쥯�ȥ�";
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "̾���� \' ��ޤ�ǥ��쥯�ȥ��������ɽ������ޤ��󡣺������Ƥ��ޤ��ޤ�����ä��̤Υ��֥ǥ��쥯�ȥ�����򤷤Ƥ���������";
$net2ftp_messages["Directory"] = "�ե����";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "�ǥ��쥯�ȥ� <b>%1\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "�ǥ��쥯�ȥ� <b>%1\$s</b> ��������뤳�Ȥ��Ǥ��ޤ���Ǥ�����";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �ε��ľ���� <b>%2\$s</b> ���ѹ�����ޤ���";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "�ǥ��쥯�ȥ� <b>%1\$s</b> ����������ޤ�����";
$net2ftp_messages["Directory Tree"] = "�ĥ꡼ɽ��";
$net2ftp_messages["Disabled"] = "̵��";
$net2ftp_messages["Double-click to go to a subdirectory:"] = "���֥륯��å��ǥ��֥ǥ��쥯�ȥ�ذ�ư:";
$net2ftp_messages["Download"] = "�����������";
$net2ftp_messages["Download a zip file containing all selected entries"] = "���򤵤줿����ȥ�򤹤٤ƴޤవ�̥ե����������������";
$net2ftp_messages["Download the file %1\$s"] = "�ե����� %1\$s �Υ����������";
$net2ftp_messages["Drag and drop one of the links below to the bookmarks bar"] = "Drag and drop one of the links below to the bookmarks bar";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "����Ū������� <b>%1\$s</b> �ؤ� �Żҥ᡼�����������ޤ���Ǥ�����";
$net2ftp_messages["Edit"] = "�Խ�";
$net2ftp_messages["Edit the source code of file %1\$s"] = "�ե����� %1\$s �Υ����������ɤ��Խ�";
$net2ftp_messages["Email the zip file in attachment to:"] = "Email �˰��̥ե������ź��:";
$net2ftp_messages["Empty logs"] = "�����ξõ�";
$net2ftp_messages["Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"] = "Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21";
$net2ftp_messages["Enter your password"] = "Enter your password";
$net2ftp_messages["Enter your username"] = "Enter your username";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp.";
$net2ftp_messages["Example"] = "��";
$net2ftp_messages["Executable"] = "�¹Բ�ǽ�ե�����";
$net2ftp_messages["Execute %1\$s in a new window"] = "%1\$s �򿷤���������ɥ��Ǽ¹�";
$net2ftp_messages["FTP mode"] = "FTP�⡼��";
$net2ftp_messages["FTP server"] = "FTP ������";
$net2ftp_messages["FTP server port"] = "FTP�����Хݡ���";
$net2ftp_messages["FTP server response:"] = "FTP�����Фα���:";
$net2ftp_messages["File"] = "�ե�����";
$net2ftp_messages["File <b>%1\$s</b>"] = "�ե����� <b>%1\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "�ե����� <b>%1\$s</b> �ϰ�ư�Ǥ��ޤ���";
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "�ե����� <b>%1\$s</b> �� FTP�����Ф�ž�����뤳�Ȥ��Ǥ��ޤ���Ǥ���";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "�ե����� <b>%1\$s</b> �� FTP�⡼�� <b>%2\$s</b> ����Ѥ��� FTP�����Ф�ž������ޤ���";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "�ե����� <b>%1\$s</b> �� OK";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded.";
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "�ե����� <b>%1\$s</b> ���礭�����ޤ������Υե�����ϥ��åץ����ɤ���ޤ���";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "�ե����� <b>%1\$s</b> �ε��ľ���� <b>%2\$s</b> ���ѹ�����ޤ���";
$net2ftp_messages["File: "] = "�ե�����: ";
$net2ftp_messages["Files"] = "�ե�����";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "���������Ϥ����ե����뤬 FTP �����Ф�ž������ޤ���";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted.";
$net2ftp_messages["Find files which contain a particular word"] = "�����ʸ�����ޤ�ե�����򸡺�";
$net2ftp_messages["Fingerprint"] = "Fingerprint";
$net2ftp_messages["Follow symlink %1\$s"] = "Follow symlink %1\$s";
$net2ftp_messages["Font file"] = "�ե���ȥե�����";
$net2ftp_messages["Forums"] = "�ե������";
$net2ftp_messages["GIF file"] = "GIF ���᡼��";
$net2ftp_messages["GIMP file"] = "GIMP �ͥ��ƥ��֥��᡼���ե����ޥå�";
$net2ftp_messages["GZ archive"] = "Gzip �ե�����";
$net2ftp_messages["Get fingerprint"] = "Get fingerprint";
$net2ftp_messages["Get the SSH server's public key fingerprint before logging in to verify the server's identity"] = "Get the SSH server's public key fingerprint before logging in to verify the server's identity";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Getting archive %1\$s of %2\$s from the FTP server";
$net2ftp_messages["Getting fingerprint, please wait..."] = "Getting fingerprint, please wait...";
$net2ftp_messages["Getting the FTP server system type: "] = "FTP�����ФΥ����ƥ���̤������: ";
$net2ftp_messages["Getting the FTP system type"] = "FTP�����ƥ���̤�������Ƥ��ޤ�";
$net2ftp_messages["Getting the current directory"] = "�����ȥǥ��쥯�ȥ��������Ƥ��ޤ�";
$net2ftp_messages["Getting the list of directories and files"] = "�ǥ��쥯�ȥ�ȥե�����Υꥹ�Ȥ�������Ƥ��ޤ�";
$net2ftp_messages["Getting the raw list of directories and files: "] = "�ǥ��쥯�ȥ�ȥե���������ꥹ�Ȥ������: ";
$net2ftp_messages["Go"] = "��ư";
$net2ftp_messages["Go back"] = "���";
$net2ftp_messages["Go to the advanced functions"] = "��ĥ��ǽ�β��̤򳫤�";
$net2ftp_messages["Go to the login page"] = "��������ڡ��������";
$net2ftp_messages["Go to the parent directory"] = "�ҤȤľ�ذ�ư";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "���֥ǥ��쥯�ȥ� %1\$s �ذ�ư";
$net2ftp_messages["Group"] = "���롼��";
$net2ftp_messages["HTML file"] = "HTML �ɥ������";
$net2ftp_messages["HTML templates"] = "HTML �ƥ�ץ졼��";
$net2ftp_messages["Help"] = "�إ��";
$net2ftp_messages["Help Guide"] = "�إ�ץ�����";
$net2ftp_messages["IP address: "] = "IP address: ";
$net2ftp_messages["Icons"] = "��������";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "ž�����Ʊ̾�Υե����뤬���Ǥ�¸�ߤ�����Ͼ�񤭤���ޤ�";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "̵���¤˻��Ѥ��������ϡ�����ʬ�� web�����Ф� net2ftp �򥤥󥹥ȡ��뤷�Ʋ�������";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "�⤷�ɤ����Ƥ� net2ftp��Ȥä�Ĺ�����礭�ʺ�Ȥ򤹤�ɬ�פ�������ϡ�����ʬ�Υ����Ф� net2ftp��Ƴ�����뤳�Ȥ�Ƥ���Ʋ�������";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "�̤� FTP �����Ф˥ե�����򥳥ԡ�����Ȥ��ϡ����ʤ��Υ��������������Ϥ��Ʋ�������";
$net2ftp_messages["Image"] = "����";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "web�����Ф��ͤǸ�ʿ�����Ѥ��뤳�Ȥ��ݾ㤹�뤿�ᡢ�ǡ�����ž���̤ȥ�����ץȤμ¹Ի��֤ϥ桼�����Ȥ�1��ñ�̤����¤���Ƥ��ޤ�����¤���ã�������� FTP�����Ф�ɽ�����뤳�ȤϤǤ��ޤ������ǡ������������ϤǤ��ޤ���";
$net2ftp_messages["In order to run it, click on the link below."] = "In order to run it, click on the link below.";
$net2ftp_messages["Information about the sender: "] = "Information about the sender: ";
$net2ftp_messages["Initial directory"] = "����ǥ��쥯�ȥ�";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Install software packages"] = "Install software packages";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Install software packages (requires PHP on web server)";
$net2ftp_messages["JPEG file"] = "JPEG ���᡼��";
$net2ftp_messages["Java Upload"] = "Java ���åץ�����";
$net2ftp_messages["Java source file"] = "Java �������ե�����";
$net2ftp_messages["JavaScript file"] = "JavaScript �ե�����";
$net2ftp_messages["Language:"] = "����:";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Ʊ�� FTP �����Ф˥ե�����򥳥ԡ�����Ȥ��ϡ��������Ϥ��ʤ��ǲ�������";
$net2ftp_messages["License"] = "�饤����";
$net2ftp_messages["Line"] = "��";
$net2ftp_messages["List"] = "�ꥹ��";
$net2ftp_messages["List of commands:"] = "���ޥ�ɤΥꥹ��:";
$net2ftp_messages["Logging"] = "��Ͽ��";
$net2ftp_messages["Logging into the FTP server"] = "FTP�����Ф˥������󤷤Ƥ��ޤ�";
$net2ftp_messages["Logging into the FTP server: "] = "FTP�����Ф˥���������: ";
$net2ftp_messages["Logging out of the FTP server"] = "FTP�����Ф�����������Ȥ��Ƥ��ޤ�";
$net2ftp_messages["Login"] = "��������";
$net2ftp_messages["Login!"] = "�������󤷤褦!";
$net2ftp_messages["Logout"] = "����������";
$net2ftp_messages["MOV movie file"] = "MOV �ӥǥ�";
$net2ftp_messages["MPEG movie file"] = "MPEG �ӥǥ�";
$net2ftp_messages["MS Office - Access database"] = "MS Office - Access �ǡ����١���";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - Excel ���������";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - PowerPoint �ץ쥼��ơ������";
$net2ftp_messages["MS Office - Project file"] = "MS Office - Project �ե�����";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - Visio �ɥ�������";
$net2ftp_messages["MS Office - Word document"] = "MS Office - Word �ɥ������";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "�ǥ��쥯�ȥ� %1\$s �β��˥��֥ǥ��쥯�ȥ�����";
$net2ftp_messages["Message of the sender: "] = "Message of the sender: ";
$net2ftp_messages["Mobile"] = "Mobile";
$net2ftp_messages["Mod Time"] = "��������";
$net2ftp_messages["Move"] = "��ư";
$net2ftp_messages["Move directories and files"] = "�ǥ��쥯�ȥ�ȥե�����ΰ�ư";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �ΰ�ư��:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "�ե����� <b>%1\$s</b> �ΰ�ư��:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "����ܥ�å���� <b>%1\$s</b> �ΰ�ư��:";
$net2ftp_messages["Move the selected entries"] = "���򤵤줿����ȥ���ư";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "�ե����� <b>%1\$s</b> ���ư";
$net2ftp_messages["MySQL database"] = "MySQL �ǡ����١���";
$net2ftp_messages["MySQL password"] = "MySQL �ѥ����";
$net2ftp_messages["MySQL password length"] = "MySQL �ѥ����Ĺ";
$net2ftp_messages["MySQL server"] = "MySQL ������";
$net2ftp_messages["MySQL username"] = "MySQL �桼��̾";
$net2ftp_messages["Name"] = "̾��";
$net2ftp_messages["New dir"] = "�����ǥ��쥯�ȥ�";
$net2ftp_messages["New directory name:"] = "�����ǥ��쥯�ȥ�̾:";
$net2ftp_messages["New file"] = "�����ե�����";
$net2ftp_messages["New file name: "] = "�������ե�����̾: ";
$net2ftp_messages["New name: "] = "������̾��: ";
$net2ftp_messages["No data"] = "�ǡ���̵��";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Note that if you don't open the Zip file, the files inside cannot harm your computer.";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "����: �ե������ƿ̾�Ǥ���������ޤ��󡣤��ʤ��� IP ���ɥ쥹���������� email ���ɲä���ޤ���";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "����: �֥饦�������ܥ���򥯥�å�����ȡ����Υ���ԥ塼����¾�Υ桼���� FTP�����Ф˥����������뤳�Ȥ��Ǥ��Ƥ��ޤ��ޤ���";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "����: ���ԡ��������ˡ��оݥǥ��쥯�ȥ꤬����¸�ߤ��Ƥ��ʤ���Фʤ�ޤ���";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "����: ���Υ֥å��ޡ��������Ѥ���ȡ��ݥåץ��åץ�����ɥ��ǥ桼��̾�ȥѥ���ɤ����Ϥ��ޤ���";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. �ե�����̾: %1\$s";
$net2ftp_messages["Old name: "] = "������̾��: ";
$net2ftp_messages["One click access (net2ftp won't ask for a password - less safe)"] = "One click access (net2ftp won't ask for a password - less safe)";
$net2ftp_messages["Open"] = "����";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Calc 6.0 ���ץ�åɥ�����";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Calc 6.0 �ƥ�ץ졼��";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Draw 6.0 �ɥ�������";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Draw 6.0 �ƥ�ץ졼��";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Impress 6.0 �ץ쥼��ơ������";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Impress 6.0 �ƥ�ץ졼��";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Math 6.0 ����";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Writer 6.0 �ƥ����ȥɥ������";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Writer 6.0 �ޥ������ɥ������";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Writer 6.0 �ƥ�ץ졼��";
$net2ftp_messages["Opening the file in write mode: "] = "�ե������񤭹��ߥ⡼�ɤǳ����Ƥ��ޤ�: ";
$net2ftp_messages["Owner"] = "��ͭ��";
$net2ftp_messages["PHP Source"] = "PHP ������";
$net2ftp_messages["PHP script"] = "PHP ������ץ�";
$net2ftp_messages["PNG file"] = "PNG ���᡼��";
$net2ftp_messages["Parsing the file"] = "�ե��������Ϥ��Ƥ��ޤ�";
$net2ftp_messages["Parsing the list of directories and files"] = "�ǥ��쥯�ȥ�ȥե�����Υꥹ�Ȥ���Ϥ��Ƥ��ޤ�";
$net2ftp_messages["Passive mode"] = "Passive �⡼��";
$net2ftp_messages["Password"] = "�ѥ����";
$net2ftp_messages["Password length"] = "�ѥ����Ĺ";
$net2ftp_messages["Perms"] = "���ľ���";
$net2ftp_messages["Please enter a password."] = "Please enter a password.";
$net2ftp_messages["Please enter a username."] = "Please enter a username.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Y-m-d ������ͭ�������դ� \"from\" �ƥ����ȥܥå��������Ϥ��Ʋ�������";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Y-m-d ������ͭ�������դ� \"to\" �ƥ����ȥܥå��������Ϥ��Ʋ�������";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "ͭ���ʥե����륵������ \"from\" �ƥ����ȥܥå��������Ϥ��Ʋ�������(��: 0)";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "ͭ���ʥե����륵������ \"to\" �ƥ����ȥܥå��������Ϥ��Ʋ�������(��: 500000)";
$net2ftp_messages["Please enter a valid filename."] = "ͭ���ʥե�����̾�����Ϥ��Ƥ���������";
$net2ftp_messages["Please enter a valid search word or phrase."] = "ͭ����ñ��ޤ��ϸ������Ϥ��Ƥ���������";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter your Administrator username and password."] = "�����ԤΥ桼��̾�ȥѥ���ɤ����Ϥ��Ʋ�������";
$net2ftp_messages["Please enter your MySQL settings:"] = "���ʤ��� MySQL �������ͤ����Ϥ��Ƥ�������:";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Please enter your username and password for FTP server <b>%1\$s</b>.";
$net2ftp_messages["Please specify a filename"] = "�ե�����̾����ꤷ�Ƥ�������";
$net2ftp_messages["Please wait..."] = "���Ф餯���Ԥ�������...";
$net2ftp_messages["Powered by"] = "���븵";
$net2ftp_messages["Printing the list of directories and files"] = "�ǥ��쥯�ȥ�ȥե�����Υꥹ�Ȥ�ɽ�����Ƥ��ޤ�";
$net2ftp_messages["Printing the result"] = "��̤���Ϥ��Ƥ��ޤ�";
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "���̥ե�����ν������顼 %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �ν�����";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "�ǥ��쥯�ȥ� <b>%1\$s</b> ��Υ���ȥ��������Ƥ��ޤ�:";
$net2ftp_messages["Processing entry %1\$s"] = "����ȥ� %1\$s ��������Ƥ��ޤ�";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �ν�������λ";
$net2ftp_messages["Processing the entries"] = "����ȥ�ν����򤷤Ƥ��ޤ�";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Quicktime movie file"] = "Quicktime �ӥǥ�";
$net2ftp_messages["RPM"] = "RPM �ѥå������ե�����";
$net2ftp_messages["Reading the file"] = "�ե�������ɤ߹���Ǥ��ޤ�";
$net2ftp_messages["Real movie file"] = "�ꥢ��ӥǥ� �ե�����";
$net2ftp_messages["Refresh"] = "����";
$net2ftp_messages["Rename"] = "̾�����ѹ�";
$net2ftp_messages["Rename directories and files"] = "�ǥ��쥯�ȥ�̾�ȥե�����̾���ѹ�";
$net2ftp_messages["Rename the selected entries"] = "���򤵤줿����ȥ��̾�����ѹ�";
$net2ftp_messages["Requested files"] = "Requested files";
$net2ftp_messages["Restrict the search to:"] = "��������:";
$net2ftp_messages["Restrictions:"] = "����������:";
$net2ftp_messages["Results:"] = "���:";
$net2ftp_messages["Right-click on one of the links below and choose \"Add to Favorites...\""] = "Right-click on one of the links below and choose \"Add to Favorites...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark This Link...\""] = "Right-click on one of the links below and choose \"Bookmark This Link...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark link...\""] = "Right-click on one of the links below and choose \"Bookmark link...\"";
$net2ftp_messages["Right-click on one the links below and choose \"Add Link to Bookmarks...\""] = "Right-click on one the links below and choose \"Add Link to Bookmarks...\"";
$net2ftp_messages["SSH fingerprint"] = "SSH fingerprint";
$net2ftp_messages["SSH server"] = "SSH server";
$net2ftp_messages["Save"] = "��¸";
$net2ftp_messages["Save the zip file on the FTP server as:"] = "FTP �����о�Ǽ��Υե�����򰵽�:";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";
$net2ftp_messages["Script finished in %1\$s seconds"] = "������ץȤ� %1\$s �äǽ�λ���ޤ���";
$net2ftp_messages["Script halted"] = "������ץȤ���ߤ��ޤ���";
$net2ftp_messages["Search"] = "����";
$net2ftp_messages["Search directories and files"] = "�ե�����ȥǥ��쥯�ȥ�򸡺�";
$net2ftp_messages["Search for a word or phrase"] = "ʸ����θ���";
$net2ftp_messages["Search results"] = "�������";
$net2ftp_messages["Searching the files..."] = "�ե�����θ�����...";
$net2ftp_messages["Select the directory %1\$s"] = "�ǥ��쥯�ȥ� %1\$s ������";
$net2ftp_messages["Select the file %1\$s"] = "�ե����� %1\$s ������";
$net2ftp_messages["Select the symlink %1\$s"] = "����ܥ�å���� %1\$s ������";
$net2ftp_messages["Send arbitrary FTP commands"] = "Ǥ�դ� FTP���ޥ�ɤ�����";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "FTP�����Ф�Ǥ�դ� FTP���ޥ�ɤ���������";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "FTP���ޥ�ɤ������� %2\$s �� %1\$s";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Sent via the net2ftp application installed on this website: ";
$net2ftp_messages["Set all permissions"] = "��������";
$net2ftp_messages["Set all targetdirectories"] = "���Ƥ��оݥǥ��쥯�ȥ������";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �ε��ľ�����ѹ�: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "�ե����� <b>%1\$s</b> �ε��ľ�����ѹ�: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "����ܥ�å���� <b>%1\$s</b> �ε��ľ�����ѹ�: ";
$net2ftp_messages["Setting the passive mode"] = "�ѥå��֥⡼�ɤ�����򤷤Ƥ��ޤ�";
$net2ftp_messages["Setting the passive mode: "] = "�ѥå��֥⡼�ɤ�������: ";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Setting the permissions of the temporary directory";
$net2ftp_messages["Settings used:"] = "���Ѥ��������:";
$net2ftp_messages["Setup MySQL tables"] = "MySQL �ơ��֥������";
$net2ftp_messages["Shell script"] = "�����륹����ץ�";
$net2ftp_messages["Shockwave file"] = "Shockwave �ե�����";
$net2ftp_messages["Shockwave flash file"] = "Shockwave flash ��ǥ���";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Should this link not be correct, enter the URL manually in your web browser.";
$net2ftp_messages["Size"] = "������";
$net2ftp_messages["Size of selected directories and files"] = "���򤵤줿�ǥ��쥯�ȥ�ȥե�����Υ�����";
$net2ftp_messages["Skin:"] = "�ơ���:";
$net2ftp_messages["Some additional comments to add in the email:"] = "email ���ɲä��륳����:";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Someone has requested the files in attachment to be sent to this email account (%1\$s).";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - StarCalc 5.x ���ץ�åɥ�����";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - StarChart 5.x �ɥ������";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - StarDraw 5.x �ɥ�������";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - StarImpress 5.x �ץ쥼��ơ������";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - StarImpress Packed 5.x �ե�����";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - StarMail 5.x mail �ե�����";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - StarMath 5.x ����";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - StarWriter 5.x �ƥ����ȥɥ������";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - StarWriter 5.x �ޥ������ɥ������";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "���ơ�����: <b>���Υե��������¸�Ǥ��ޤ���</b>";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "���ơ�����: %2\$s �⡼�ɤ� <b>%1\$s</b> �����¸����ޤ���";
$net2ftp_messages["Status: This file has not yet been saved"] = "���ơ�����: ���Υե�����Ϥޤ���¸����Ƥ��ޤ���";
$net2ftp_messages["Submit"] = "����";
$net2ftp_messages["Symlink"] = "����ܥ�å����";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "����ܥ�å���� <b>%1\$s</b>";
$net2ftp_messages["Symlinks"] = "����ܥ�å����";
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "���դ�ɽ���� <a href=\"http://luminous.asgaard.co.uk\">Luminous</a> ���鶡�뤵��Ƥ��ޤ�";
$net2ftp_messages["TAR archive"] = "TAR ����������";
$net2ftp_messages["TIF file"] = "TIFF ���᡼��";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Table net2ftp_log_access contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Table net2ftp_log_access could not be updated.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "�ơ��֥� net2ftp_log_consumption_ftpserver �˽�ʣ��������ȥ꤬�ޤޤ�Ƥ��ޤ���";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "�ơ��֥� net2ftp_log_consumption_ftpserver �˽�ʣ�����Ԥ��ޤޤ�Ƥ��ޤ���";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "�ơ��֥� net2ftp_log_consumption_ftpserver �Ϲ����ԲĤǤ���";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "�ơ��֥� net2ftp_log_consumption_ipaddress �˽�ʣ��������ȥ꤬�ޤޤ�Ƥ��ޤ���";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "�ơ��֥� net2ftp_log_consumption_ipaddress �˽�ʣ�����Ԥ��ޤޤ�Ƥ��ޤ���";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "�ơ��֥� net2ftp_log_consumption_ipaddress �Ϲ����ԲĤǤ���";
$net2ftp_messages["Table net2ftp_log_status contains duplicate entries."] = "Table net2ftp_log_status contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_status could not be updated."] = "Table net2ftp_log_status could not be updated.";
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "�ơ��֥� net2ftp_users �˽�ʣ�����Ԥ��ޤޤ�Ƥ��ޤ���";
$net2ftp_messages["Target directory:"] = "�оݥǥ��쥯�ȥ�:";
$net2ftp_messages["Target name:"] = "�о�̾:";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "net2ftp �Υꥹ�Ȳ��ϥ롼���ƥ���";
$net2ftp_messages["Testing the FTP functions"] = "FTP��ǽ��ƥ��Ȥ��Ƥ��ޤ�";
$net2ftp_messages["Text file"] = "�ץ졼��ƥ����� �ɥ������";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />";
$net2ftp_messages["The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />"] = "The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "FTP������<b>%1\$s</b>�ϡ� �ػߤ��줿FTP�����ФΥꥹ�Ȥ����äƤ��ޤ���";
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "FTP������ <b>%1\$s</b> �ϡ����Ĥ��줿FTP�����ФΥꥹ�Ȥ����äƤ��ޤ���";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "FTP�����Хݡ��� %1\$s �ϻ��ѤǤ��ޤ���";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "FTP ž���⡼�� (ASCII �ޤ��� �Х��ʥ�) �ϥե�����̾�γ�ĥ�Ҥˤ�äƼ�ưŪ�˷��ꤵ��ޤ�";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "SQL�����ꥨ�顼 <b>%1\$s</b> ��¹Ԥ��뤳�Ȥ��Ǥ��ޤ���Ǥ�����";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "SQL������ <b>%1\$s</b> ������˼¹Ԥ���ޤ�����";
$net2ftp_messages["The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />"] = "The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "�����ͥ��顼: <b>%1\$s</b> �� 000 �� 777 ���ͤǤϤ���ޤ��󡣺����ꤷ�Ʋ�������";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �����򤹤뤳�Ȥ��Ǥ��ޤ��� - ���ʤ��ˤϤ��Υǥ��쥯�ȥ��������뽽ʬ�ʻ�ʤ��ʤ������ޤ��ϥǥ��쥯�ȥ꤬¸�ߤ��ޤ���";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �����򤹤뤳�Ȥ��Ǥ��ޤ��󡣤��Υǥ��쥯�ȥ�ϥ����åפ���ޤ���";
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "�ǥ��쥯�ȥ� <b>%1\$s</b> ��¸�ߤ��ʤ��������򤹤뤳�Ȥ��Ǥ��ޤ��󡣥ǥ��쥯�ȥ� <b>%2\$s</b> �������ɽ������ޤ�����";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "���Ϥ��줿 email ���ɥ쥹 (%1\$s) ��ͭ���ǤϤ���ޤ���<br />���ν񼰤�§�ä����ɥ쥹�����Ϥ��Ʋ����� <b>username@domain.com</b>";
$net2ftp_messages["The file %1\$s could not be opened."] = "�ե����� %1\$s �򳫤����Ȥ��Ǥ��ޤ���Ǥ�����";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The file <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "The file <b>%1\$s</b> is too big to be copied, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "The file <b>%1\$s</b> is too big to be moved, aborting the move";
$net2ftp_messages["The file is too big to be transferred"] = "The file is too big to be transferred";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "�ե����� %1\$s �Υϥ�ɥ���Ĥ��뤳�Ȥ��Ǥ��ޤ���Ǥ�����";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "�ե����� %1\$s �Υϥ�ɥ�򳫤����Ȥ��Ǥ��ޤ���Ǥ�����";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "�ǿ��С���������� net2ftp.com �����Ф��鸡������ޤ���Ǥ����������ѤΥ֥饦������ net2ftp.com �����Ф��龮�ե����뤬�ɤ߹��ޤ��Τ��ɻߤ��Ƥ��붲�줬����ޤ����֥饦���Υ������ƥ�������ǧ���Ʋ�������";
$net2ftp_messages["The log tables could not be copied."] = "The log tables could not be copied.";
$net2ftp_messages["The log tables could not be renamed."] = "The log tables could not be renamed.";
$net2ftp_messages["The log tables were copied successfully."] = "The log tables were copied successfully.";
$net2ftp_messages["The log tables were renamed successfully."] = "The log tables were renamed successfully.";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "�������֤ξ�¤� <b>%1\$s ��</b> �Ǥ�";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "1�ĤΥե�����ξ�¥������� net2ftp �� <b>%1\$s</b> �ޤǡ� PHP �� <b>%2\$s</b> �ޤǤ����¤���Ƥ��ޤ�";
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "The net2ftp installer script has been copied to the FTP server.";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "�����ǥ��쥯�ȥ�� <b>%1\$s</b> �˺�������ޤ���";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "�������ե�����̾�˥ɥå�(.)��ޤळ�ȤϤǤ��ޤ��󡣤��Υ���ȥ�� <b>%1\$s</b> �˲�̾����ޤ���Ǥ�����";
$net2ftp_messages["The number of files which were skipped is:"] = "��ά���줿�ե�����θĿ�:";
$net2ftp_messages["The oldest log table could not be dropped."] = "The oldest log table could not be dropped.";
$net2ftp_messages["The oldest log table was dropped successfully."] = "The oldest log table was dropped successfully.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment).";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "�ơ��֥� <b>%1\$s</b> ����ˤ��뤳�Ȥ��Ǥ��ޤ���Ǥ�����";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "�ơ��֥� <b>%1\$s</b> ���Ŭ�����뤳�Ȥ��Ǥ��ޤ���Ǥ�����";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "�ơ��֥� <b>%1\$s</b> ������˶��ˤʤ�ޤ�����";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "�ơ��֥� <b>%1\$s</b> ������˺�Ŭ������ޤ�����";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "�оݤΥǥ��쥯�ȥ� <b>%1\$s</b> �ϸ��Υǥ��쥯�ȥ� <b>%2\$s</b> �Υ��֥ǥ��쥯�ȥ꤫���ޤ���Ʊ���ǥ��쥯�ȥ�Ǥ������Υǥ��쥯�ȥ�ν����򥹥��åפ��ޤ���";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "�оݤΥե����� <b>%1\$s</b> �ϸ��Υե������Ʊ̾�Ǥ������Υե�����ν����򥹥��åפ��ޤ���";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "���ʤ��� net2ftp�Ǽ¹Ԥ��褦�Ȥ�����Ȥϡ����ƻ��֤� %1\$s �ä���Ĺ�����֤�ɬ�פǤ����������äơ���Ȥ���ߤ��ޤ�����";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "���򤵤줿�ǥ��쥯�ȥ�ȥե�����ι�ץ�����:";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "�ѿ� <b>consumption_ipaddress_datatransfer</b> �Ͽ��ͤǤϤ���ޤ���";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "ʸ���� <b>%1\$s</b> �ϼ��Υե�������˸��Ĥ���ޤ���:";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "ʸ���� <b>%1\$s</b> �����򤵤줿�ǥ��쥯�ȥ�ȥե�������ˤϸ��Ĥ���ޤ���Ǥ�����";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "���̥ե�����Ϥ��Ǥ�FTP�����о�� <b>%1\$s</b> �Ȥ�����¸����Ƥ��ޤ�";
$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "���̥ե������ <b>%1\$s</b> ����������ޤ�����";
$net2ftp_messages["This SQL query is going to be executed:"] = "���� SQL�����꤬�¹Ԥ���褦�Ȥ��Ƥ��ޤ�:";
$net2ftp_messages["This file is not accessible from the web"] = "���Υե������ web�夫�饢�������Ǥ��ޤ���";
$net2ftp_messages["This folder is empty"] = "���Υե�����϶��Ǥ�";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "���ε�ǽ�ϥ����Ȥδ����Ԥˤ�ä�̵���ˤ���Ƥ��ޤ���";
$net2ftp_messages["This function is available on PHP 5 only"] = "���ε�ǽ�� PHP 5 �ǤΤ�ͭ���Ǥ�";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "This script runs on your web server and requires PHP to be installed.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "���λ������¤ϡ����ͤ���ʿ�� web�����Ф����ѤǤ���褦�ݾ㤹���ΤǤ���";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "���ΥС������� net2ftp �Ϻǿ��Τ�ΤǤ���";
$net2ftp_messages["Time of sending: "] = "Time of sending: ";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "������ɤ�����ˤϡ����ƤΥ֥饦���Υ�����ɥ����Ĥ���ɬ�פ�����ޤ���";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "��������¸����ˤϡ������ξ�Ǳ�����å��� '̾�����դ��Ʋ�������¸...' �����򤷤Ƥ�������";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "���̤��оݥǥ��쥯�ȥ�����ꤹ��ˤϡ���Υƥ����ȥܥå������оݥǥ��쥯�ȥ�����Ϥ� \"���Ƥ��оݥǥ��쥯�ȥ������\" �ܥ���򥯥�å����Ʋ�������";
$net2ftp_messages["To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\""] = "To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\"";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "���Ƥε��ľ����Ʊ���ͤˤ���ˤϡ������ǵ��ľ�������Ϥ� \"��������\" �ܥ���򥯥�å����Ƥ�������";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now.";
$net2ftp_messages["Transferring files to the FTP server"] = "�ե������ FTP�����Ф�ž�����Ƥ��ޤ�";
$net2ftp_messages["Transform selected entries: "] = "���򤵤줿����ȥ��: ";
$net2ftp_messages["Transform selected entry: "] = "Transform selected entry: ";
$net2ftp_messages["Troubleshoot an FTP server"] = "FTP�����ФΥȥ�֥륷�塼��";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "����web�����Ф� net2ftp �Υȥ�֥륷�塼��";
$net2ftp_messages["Troubleshoot your net2ftp installation"] = "���ʤ��� net2ftp Ƴ����ȥ�֥륷�塼��";
$net2ftp_messages["Troubleshooting functions"] = "�ȥ�֥륷�塼�ƥ��󥰵�ǽ";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "��Ȥ��꾮���ʺ�Ȥ�ʬ�䤷�ƤߤƲ�����: �ե��������������¤����礭�ʥե������ʤ��Ƥ���������";
$net2ftp_messages["Two click access (net2ftp will ask for a password - safer)"] = "Two click access (net2ftp will ask for a password - safer)";
$net2ftp_messages["Type"] = "������";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "�ƥ�ݥ��ե�������Ĥ��뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "FTP������ <b>%1\$s</b> �Υݡ��� <b>%2\$s</b> ����³���뤳�Ȥ��Ǥ��ޤ���<br /><br />���Υ��ɥ쥹�������� FTP������ �Τ�ΤǤ���? ��������� HTTP (web) �����ФΤ�ΤȤϰۤʤäƤ��ޤ������ʤ��� ISP�Υ��ݡ��ȥǥ��� �ޤ��� �����ƥ������ ���䤤��碌�Ƥ���������<br />";
$net2ftp_messages["Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to connect to the server <b>%1\$s</b>."] = "Unable to connect to the server <b>%1\$s</b>.";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "�ե����� <b>%1\$s</b> �򥳥ԡ����뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "FTP�⡼�� <b>%2\$s</b> ����Ѥ��ƥ�������ե�������⡼�ȥե����� <b>%1\$s</b> �˥��ԡ����뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "FTP�⡼�� <b>%2\$s</b> ����Ѥ��ƥ�⡼�ȥե����� <b>%1\$s</b> ���������ե�����˥��ԡ����뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �κ����ϤǤ��ޤ���";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "���֥ǥ��쥯�ȥ� <b>%1\$s</b> �Ϥ��Ǥ�¸�ߤ��뤿�ᡢ�������뤳�Ȥ��Ǥ��ޤ��󡣥��ԡ�����ư�������³���ޤ�...";
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "�ƥ�ݥ��ե�����κ������Ԥ��ޤ��󡣥ǥ��쥯�ȥ� %1\$s �ε��ľ�����ǧ���Ƥ���������";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "�ե����� <b>%1\$s</b> �������뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "�ǥ��쥯�ȥ� <b>%1\$s</b> �Ϻ���Ǥ��ޤ���";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "�ե����� <b>%1\$s</b> �Ϻ���Ǥ��ޤ���";
$net2ftp_messages["Unable to delete the local file"] = "��������ե�����������뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "���֥ǥ��쥯�ȥ� <b>%1\$s</b> �������뤳�Ȥ��Ǥ��ޤ��� - ���Υǥ��쥯�ȥ�϶��ǤϤ���ޤ���";
$net2ftp_messages["Unable to delete the temporary directory"] = "Unable to delete the temporary directory";
$net2ftp_messages["Unable to delete the temporary file"] = "�ƥ�ݥ��ե�����������뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Unable to delete the temporary file %1\$s";
$net2ftp_messages["Unable to determine your IP address."] = "���ʤ��� IP���ɥ쥹��Ƚ�̤��뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "�����ȥ��ޥ�� <b>%1\$s</b> ��¹Ԥ��뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "�����ȥ��ޥ��<b>%1\$s</b> �ϼ¹ԤǤ��ޤ���CHMOD ���ޥ�ɤ� Windows FTP�����ФǤϤʤ� Unix FTP�����ФǤΤ�ͭ���Ǥ��뤳�Ȥ����դ��Ƥ���������";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "SQL������ <b>%1\$s</b> ��¹Ԥ��뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to execute the SQL query."] = "SQL�������¹Ԥ��뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Unable to extract the files and directories from the archive";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Unable to get the archive <b>%1\$s</b> from the FTP server";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "FTP������ ����ե����� <b>%1\$s</b> ������� ����ե����� <b>%2\$s</b> �Ȥ�����¸���뤳�Ȥ��Ǥ��ޤ���<br />�ǥ��쥯�ȥ� %3\$s �ε��ľ�����ǧ���Ƥ���������<br />";
$net2ftp_messages["Unable to get the list of packages"] = "Unable to get the list of packages";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "FTP������ <b>%1\$s</b> �˥桼��̾ <b>%2\$s</b> �ǥ������󤹤뤳�Ȥ��Ǥ��ޤ���<br /><br />���ʤ��Υ桼��̾�ȥѥ���ɤ��������������Ǥ���? ���ʤ��� ISP�Υ��ݡ��ȥǥ��� �ޤ��� �����ƥ������ ���䤤��碌�Ƥ���������<br />";
$net2ftp_messages["Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Unable to move the file <b>%1\$s</b>, aborting the move";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "���åץ����ɤ����ե������ƥ�ݥ��ǥ��쥯�ȥ�ذ�ư���뤳�Ȥ��Ǥ��ޤ���<br /><br />���Υ����Ȥδ����Ԥ� net2ftp �� /temp �ǥ��쥯�ȥ�ε��ľ���� <b>777</b> �����ꤹ��ɬ�פ�����ޤ���";
$net2ftp_messages["Unable to open the system log."] = "Unable to open the system log.";
$net2ftp_messages["Unable to open the template file"] = "�ƥ�ץ졼�ȥե����뤬�����ޤ���";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "�ƥ�ݥ��ե�����򳫤����Ȥ��Ǥ��ޤ��󡣥ǥ��쥯�ȥ� %1\$s �ε��ľ�����ǧ���Ƥ���������";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "FTP�����о�˥ե����� <b>%1\$s</b> ���֤����Ȥ��Ǥ��ޤ���<br />�ǥ��쥯�ȥ�ؤν񤭹��ߵ��Ĥ�����ޤ���";
$net2ftp_messages["Unable to read the template file"] = "�ƥ�ץ졼�ȥե����뤬�ɤ߹���ޤ���";
$net2ftp_messages["Unable to read the temporary file"] = "�ƥ�ݥ��ե�������ɤ߹��ळ�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "�ǥ��쥯�ȥ�ʤޤ��ϥե�����ˤ�̾���� <b>%1\$s</b> ���� <b>%2\$s</b> �ѹ��Ǥ��ޤ���";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "�ǡ����١��� <b>%1\$s</b> �����򤹤뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to send the file to the browser"] = "�ե������֥饦�������뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "FTP������ <b>%1\$s</b> �Υѥå��֥⡼�ɤ��ڤ��ؤ��뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Unable to write a message to the system log."] = "Unable to write a message to the system log.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "�ƥ�ݥ��ե����� <b>%1\$s</b> �˽񤭹��ळ�Ȥ��Ǥ��ޤ���<br />�ǥ��쥯�ȥ� %2\$s �ε��ľ�����ǧ���Ƥ���������";
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "ͽ�����ʤ����ơ���ʸ��: %1\$s ��λ���ޤ���";
$net2ftp_messages["Unrecognized FTP output"] = "������ FTP ����";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Unzip archives"] = "Unzip archives";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Unzip the selected archives on the FTP server";
$net2ftp_messages["Up"] = "���";
$net2ftp_messages["Update"] = "����";
$net2ftp_messages["Upload"] = "���åץ�����";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "�������С������Υե����� %1\$s �򥢥åץ����ɤ��ѹ���ʬ��ʻ��";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Java���ץ�åȤ����Ѥ��ƥǥ��쥯�ȥ�ȥե�����򥢥åץ�����";
$net2ftp_messages["Upload files and archives"] = "�ե�����Ȱ��̥ե�����Υ��åץ�����";
$net2ftp_messages["Upload more files and archives"] = "¾�Υե�����Ȱ��̥ե�����⥢�åץ����ɤ���";
$net2ftp_messages["Upload new files in directory %1\$s"] = "�ǥ��쥯�ȥ� %1\$s ��˿������ե�����򥢥åץ�����";
$net2ftp_messages["Upload to directory:"] = "���åץ�������Υǥ��쥯�ȥ�:";
$net2ftp_messages["Username"] = "�桼��̾";
$net2ftp_messages["Version information"] = "�С���������";
$net2ftp_messages["View"] = "����";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Macromedia ShockWave Flash �ࡼ�ӡ� %1\$s ��ɽ��";
$net2ftp_messages["View file %1\$s"] = "�ե����� %1\$s ��ɽ��";
$net2ftp_messages["View image %1\$s"] = "���� %1\$s ��ɽ��";
$net2ftp_messages["View logs"] = "������ɽ��";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "�ե����� %1\$s �򤢤ʤ��� HTTP web�����Ф�ɽ��";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "�ե����� %1\$s �Υ����������ɤ��դ���ɽ��";
$net2ftp_messages["WAV sound file"] = "WAV �����ǥ���";
$net2ftp_messages["Webmaster's email: "] = "Webmaster's email: ";
$net2ftp_messages["Writing some text to the file: "] = "�ե�����˥ƥ����Ȥ�񤭹���Ǥ��ޤ�: ";
$net2ftp_messages["Wrong username or password. Please try again."] = "���ä��桼��̾���ѥ���ɤǤ������ľ���Ƥ���������";
$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "���̥ե�����Υե�����̾�����Ϥ���Ƥ��ޤ������򥯥�å����ƥե�����̾�����Ϥ��Ʋ�������";
$net2ftp_messages["You did not enter your Administrator username or password."] = "�����ԤΥ桼��̾���ѥ���ɤ����Ϥ��Ƥޤ���";
$net2ftp_messages["You did not provide any file to upload."] = "���åץ����ɤ���ե����뤬���ꤵ��Ƥ��ޤ���";
$net2ftp_messages["You did not provide any text to send by email!"] = "�Żҥ᡼������������å�����������ޤ���!";
$net2ftp_messages["You did not supply a From address."] = "���пͥ��ɥ쥹��̤���ϤǤ���";
$net2ftp_messages["You did not supply a To address."] = "���襢�ɥ쥹��̤���ϤǤ���";
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "���ʤ���IP���ɥ쥹(%1\$s)�ϡ��ػߤ��줿IP���ɥ쥹�Υꥹ�Ȥ����äƤ��ޤ���";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Your IP address (%1\$s) is not in the list of allowed IP addresses.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Your browser does not support applets, or you have disabled applets in your browser settings.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "���ʤ��Υ롼�ȥǥ��쥯�ȥ� <b>%1\$s</b> ��¸�ߤ��ʤ��������򤹤뤳�Ȥ��Ǥ��ޤ���";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your task was stopped"] = "��Ȥ���ߤ��ޤ���";
$net2ftp_messages["Zip"] = "����";
$net2ftp_messages["Zip archive"] = "Zip ����������";
$net2ftp_messages["Zip entries"] = "���̥ե����륨��ȥ�";
$net2ftp_messages["Zip the selected entries to save or email them"] = "���򤵤줿����ȥ�򰵽�";
$net2ftp_messages["en"] = "ja";
$net2ftp_messages["files which were last modified"] = "�ե�����κǽ����������ǻ���";
$net2ftp_messages["files with a filename like"] = "�ե�����̾����";
$net2ftp_messages["files with a size"] = "�ե����륵��������";
$net2ftp_messages["from"] = "from";
$net2ftp_messages["left"] = "left";
$net2ftp_messages["ltr"] = "ltr";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp has tried to determine the directory mapping between the FTP server and the web server.";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com.";
$net2ftp_messages["no - please install it!"] = "������ - ���󥹥ȡ��뤷�Ƥ�������!";
$net2ftp_messages["not OK"] = "����";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "���ԡ��ǥ��쥯�ȥ� %1\$s �ε��ľ�����ǧ���Ƥ�������";
$net2ftp_messages["right"] = "right";
$net2ftp_messages["to"] = "to";
$net2ftp_messages["to:"] = "��������:";
$net2ftp_messages["yes"] = "�Ϥ�";

?>