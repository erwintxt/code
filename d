commit 7f08f410d21f599beb90e97d92544d7dcb79ede3 (HEAD -> develop, erwin/develop)
Author: erwintxt <erwin.txt@gmail.com>
Date:   Wed Sep 13 10:22:03 2017 +0700

    tanpa forget password

commit 2cf06fd06e06a13ed774d0040779e1e8c8bdcea2
Author: erwintxt <erwin.txt@gmail.com>
Date:   Wed Sep 13 10:20:56 2017 +0700

    tanpa forget password

commit cbe27d76f0aaba7b40f4b23904e4258964bdc50c (origin/develop, origin/HEAD)
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Aug 7 11:10:21 2017 +0300

    [ci skip] Update docs & add changelog entry for PR #5217

commit 32a60d9724c0b810314440c5306a72838299f18a
Merge: 4aaf3847d 9957eb37a
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Aug 7 11:07:33 2017 +0300

    Merge pull request #5217 from erkaperka/develop
    
    Minor change in _display() method in CI_Output class allowing us to o…

commit 9957eb37a9f12e9d9ea48b26801b1cf573376539
Author: Erik Nord <me@eriknord.me>
Date:   Sat Aug 5 19:11:09 2017 +0200

    Minor change in _display() method in CI_Output class allowing us to override output data with an empty string. Without this change CI chooses to use the default "final_output" var; even though we passed an empty string to the method.

commit 4aaf3847dbd3a33bdd3341a93462be4f0cbcaeef
Author: Instructor, Computer Systems Technology <jim_parry@bcit.ca>
Date:   Wed Jul 26 21:43:24 2017 -0700

    Update composer.json
    
    Replace IRC reference with Slack

commit 3375040f47d82cc018b1bcd3949665360914d04d
Author: Instructor, Computer Systems Technology <jim_parry@bcit.ca>
Date:   Wed Jul 26 21:42:14 2017 -0700

    Update readme.rst

commit 6cdfed28389842c30d3d9a0022de4aa1791b23e9
Merge: b7ae9d4cd 9cce9b7dd
Author: Andrey Andreev <narf@devilix.net>
Date:   Fri Jul 21 11:59:51 2017 +0300

    [ci skip] Merge pull request #5188 from ryanbriscall/update-sphinx-version-userguide-src
    
    updates version of sphinx to 1.6.3 for easyinstall command in step 2 …

commit b7ae9d4cd171e1674022c95100798cc7ada7572a
Merge: 4aaa9072f 3b490ef66
Author: Andrey Andreev <narf@devilix.net>
Date:   Fri Jul 21 11:51:37 2017 +0300

    [ci skip] Merge pull request #5191 from jim-parry/patch/docs
    
    Fix some mistakes in the user guide

commit 3b490ef66741ff6e822ac641df52f44c17936d97
Author: Master Yoda <jim_parry@bcit.ca>
Date:   Thu Jul 20 08:50:33 2017 -0700

    Added code-block tag to make sphinx happy with urls.rst

commit 771eca8d9ac7fc7ebed46b3a91d384eb62debd6e
Author: Master Yoda <jim_parry@bcit.ca>
Date:   Thu Jul 20 07:23:44 2017 -0700

    Remove changes to general/urls.rst

commit 30f15f9317b5df49ebe880a423a317b045a495eb
Author: Master Yoda <jim_parry@bcit.ca>
Date:   Thu Jul 20 04:58:16 2017 -0700

    Fix some mistakes in the user guide

commit 4aaa9072fc40c9c10bb1501a86505666939deb7d
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jul 20 12:50:49 2017 +0300

    [ci skip] Fix changelog entries (errors detected while testing #5188)

commit 9cce9b7dd19ab6843af6925a1910cdf0924f0736
Author: ryanbriscall <ryanbriscall@gmail.com>
Date:   Sun Jul 16 23:51:54 2017 -0600

    updates prerequisites text to clarify v2.7 requirement of Python for Sphinx.

commit 2ce3173415226a34ded78ff24556178cb41c7269
Author: ryanbriscall <ryanbriscall@gmail.com>
Date:   Sun Jul 16 12:17:34 2017 -0600

    updates version of sphinx to 1.6.3 for easyinstall command in step 2 of user_guide_src/README.

commit f107a186f0ddd5695c142c3202106bea4cd4b226
Merge: 3b943589b 216b80a38
Author: Andrey Andreev <narf@devilix.net>
Date:   Fri Jul 14 13:05:48 2017 +0300

    [ci skip] Merge pull request #5183 from ytetsuro/add_oci8_driver_write_type
    
    add is_write_type method for merge query

commit 216b80a381a4d151e4f748542a9190292a928d79
Author: ytetsuro <phper.0o0@gmail.com>
Date:   Wed Jul 12 15:44:35 2017 +0900

    add is_write_type method for merge query
    
    Signed-off-by: tetsuro yoshikawa <phper.0o0@gmail.com>

commit 3b943589b3d78731460895c7f02886bebdb76b45
Merge: aa8ca65ac b344273d2
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Jul 10 14:40:06 2017 +0300

    [ci skip] Merge pull request #5128 from lloricode/profiler-pre-tag
    
    Profiler add pre tag

commit b344273d2aa61457d0119f0b224d400b8de65654
Author: Lloric Mayuga Garcia <emorickfighter@gmail.com>
Date:   Sun Jul 9 22:19:19 2017 +0800

    php style
    
    Signed-off-by: Lloric Mayuga Garcia <emorickfighter@gmail.com>

commit aa8ca65ac7ca3afda3331a5da16297e7afeeecbe
Merge: 4bda6f7fd d8a393d23
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jul 6 15:12:09 2017 +0300

    [ci skip] Merge pull request #5173 from Syafiqq/develop
    
    Add array identifier for library loader docblock

commit d8a393d2357f3850e6524ab9bce50ab12e7775c1
Merge: cea4e2ca1 6ec043375
Author: Syafiqq <syafiq.rezpector@gmail.com>
Date:   Thu Jul 6 17:11:49 2017 +0700

    Merge remote-tracking branch 'origin/develop' into develop
    
    # Conflicts:
    #       system/core/Loader.php

commit cea4e2ca1103506ce2b8f62e2065edc0f8a792b1
Author: Syafiqq <syafiq.rezpector@gmail.com>
Date:   Thu Jul 6 08:16:47 2017 +0700

    Add array identifier for library loader

commit 4bda6f7fdbead56108c4377ae53db8089f10d933
Merge: 5b5e053b9 24e91311b
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jul 6 11:49:13 2017 +0300

    [ci skip] Merge pull request #5170 from tianhe1986/develop_session_race_condition
    
    Decreasing the probability of race condition in session lock

commit 24e91311bd86b9eddb9ffb2d4b6ab78bf19796c2
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Thu Jul 6 09:25:01 2017 +0800

    Format fixing.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit 6ec0433759964e74d71233b45cd259d24a24ecf3
Author: Syafiqq <syafiq.rezpector@gmail.com>
Date:   Thu Jul 6 08:16:47 2017 +0700

    Add array identifier for library loader

commit 3eecd968bd68cf3c70baa81be332b2007a14e564
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Wed Jul 5 19:42:49 2017 +0800

    Simplifying the code.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit e98c203f81a11cfd82a644381cd50f865384118d
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Wed Jul 5 17:05:23 2017 +0800

    Acquiring memcached lock with add() to avoid race conditions.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit 569cf69078de1c8a970ab4259467dfe27b4cdb96
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Wed Jul 5 16:54:01 2017 +0800

    Acquiring redis lock with existence check.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit 5b5e053b95a586c3c278e8d7c9d55c2459ed0908
Merge: 9414d4926 4fbc7a0ca
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Jun 26 10:26:33 2017 +0300

    [ci skip] Merge pull request #5162 from hex-ci/patch-3
    
    Fix a spelling typo in security docs

commit 4fbc7a0cac132bb98451d7c86e89e81b76aef08f
Author: Hex <hex@codeigniter.org.cn>
Date:   Mon Jun 26 00:29:50 2017 +0800

    Fix the spelling of the word.

commit 9414d492612e08f7fa8ae46131d882547afb49ff
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jun 22 15:39:05 2017 +0300

    Close #4134: Allow dots in alias names detected by QB

commit 0c06ba0c587b5ef97718bc3b19c6dba163b7acb0
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jun 22 14:45:50 2017 +0300

    Implement #2436 (access to FV processed data)

commit a2a49fcc322acd5ded3c0664d64bbebe982815f5
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jun 22 13:51:11 2017 +0300

    [ci skip] Misc cleanup of CI_Email code

commit 8acd0fa915f61d4e152ce7505646865815b4f458
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jun 22 13:40:21 2017 +0300

    [ci skip] Close #3711

commit 56c233fc4a455d33d2e679b59132b8a7a1cf1832
Author: Andrey Andreev <narf@devilix.net>
Date:   Wed Jun 21 15:29:25 2017 +0300

    Implement #193: Validating entire arrays in a single function call

commit f39cb00559b86f956737c62ec1dcbc9aab29ebb9
Author: Andrey Andreev <narf@devilix.net>
Date:   Wed Jun 21 14:46:25 2017 +0300

    [ci skip] Add changelog entry for PR #5159

commit db29eb3b290a67e92e67372bd1d772df431c607b
Merge: 8186b6b39 c8a0d0bc7
Author: Andrey Andreev <narf@devilix.net>
Date:   Wed Jun 21 14:44:44 2017 +0300

    Merge pull request #5159 from tianhe1986/develop_model_load
    
    Always check a model be a subclass of CI_Model when loaded

commit c8a0d0bc784a778694e7f42243a1584b51cf207d
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Wed Jun 21 19:23:45 2017 +0800

    Add unit test.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit 7b61ba41bbd431bdfb0ef11aca41b893e33f5c20
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Wed Jun 21 19:17:23 2017 +0800

    Always check whether a model be a subclass of CI_Model when loaded.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit 8186b6b398c26c0c1e0052eaddf4fc122e4929a5
Merge: af5c8960d 47f540e82
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Jun 19 12:02:53 2017 +0300

    Merge branch '3.1-stable' into develop
    
    Conflicts resolved:
            system/core/CodeIgniter.php
            tests/codeigniter/libraries/Form_validation_test.php
            user_guide_src/source/changelog.rst
            user_guide_src/source/conf.py
            user_guide_src/source/installation/downloads.rst
            user_guide_src/source/installation/upgrading.rst

commit 47f540e82cbc1591cc7f1aa92d47a8c8c4028c63
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Jun 19 11:38:25 2017 +0300

    [ci skip] Starting 3.1.6-dev

commit 5b0e1f222cc96ed55d524008e1edcf9058e5132d
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Jun 19 11:29:39 2017 +0300

    [ci skip] Prepare 3.1.5 release

commit ed1a0453a9372e88058169f2028c9a2140318961
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Jun 19 08:25:23 2017 +0300

    [ci skip] Fix a bug in FV valid_email()

commit da6ac585e32ffb036ec3cb6b0475407901146e4a
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jun 15 14:24:51 2017 +0300

    [ci skip] Add changelog entry for #5155

commit 2c1b3d9694e570c45ac82fcefbb51c965c6ea8a8
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jun 15 14:22:49 2017 +0300

    Merge pull request #5155 from tianhe1986/develop_count_ignore_limit
    
    Fix CI_DB_query_builder::count_all_results() returning wrong count with LIMIT/OFFSET

commit af5c8960d80a9db362722ca675ffddb2079bbce9
Merge: f51687fb9 bcd005faf
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jun 15 14:22:49 2017 +0300

    Merge pull request #5155 from tianhe1986/develop_count_ignore_limit
    
    Fix CI_DB_query_builder::count_all_results() returning wrong count with LIMIT/OFFSET

commit bcd005fafa195d443db2419629bfeed99e49fc7e
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Thu Jun 15 17:58:54 2017 +0800

    Getting right num of rows with LIMIT usage.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit f8df72efa0e085f3f8fbbd560b8b74704d5efec5
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Thu Jun 15 17:53:35 2017 +0800

    Revert "Ignore LIMIT when using CI_DB_query_builder::count_all_results"
    
    This reverts commit 9f6da3c2f11535fee09dd306ae6b884168e4623b.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit fffdd9c20b2faa49070e67ec59f03c262085d7fc
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jun 15 11:27:31 2017 +0300

    [ci skip] Merge pull request #5154 from angelxaces/patch-1
    
    Grammatical fix in ancillary_classes.rst doc

commit f51687fb99a905fe4f63918aaae672a2fdf20334
Merge: e4ed5d950 d3dff0bc5
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Jun 15 11:27:31 2017 +0300

    [ci skip] Merge pull request #5154 from angelxaces/patch-1
    
    Grammatical fix in ancillary_classes.rst doc

commit ef0bfea072a6b20e14cb6777c27b8b3a3d94ab5d
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Thu Jun 15 11:47:28 2017 +0800

    Adding unit test.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit 9f6da3c2f11535fee09dd306ae6b884168e4623b
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Thu Jun 15 11:45:39 2017 +0800

    Ignore LIMIT when using CI_DB_query_builder::count_all_results
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit d3dff0bc54060f4b9b1ec0cb2250847aee1085b2
Author: Angel Aces <angelxaces@users.noreply.github.com>
Date:   Wed Jun 14 12:09:05 2017 -0700

    Create ancillary_classes.rst
    
    "Normally, to call any of the available CodeIgniter methods requires you to use the ``$this`` construct::" - Grammatical adjustment. It appears that the author meshed two sentences together by starting with the proper noun that they ended the previous sentence but as it is the sentence reads:
    "Normally to call any of the available.
    CodeIgniter methods requires..."

commit 7ff61363b7f153670e9c8e4972eb5b842fc4ea53
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Jun 13 13:26:31 2017 +0300

    [ci skip] Apply PR #5150 patch to pdo/oci and add changelog entry

commit 09d4eb6d6272251a598986552971d6ba311f7afb
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Jun 13 13:23:27 2017 +0300

    [ci skip] Merge pull request #5150 from ytetsuro/add-oracle-rename-column-to-keyword
    
    Fix DBForge triggering ORA-00946 while renaming columns

commit e4ed5d950a50fe64223bc6b143301ac87bbde474
Merge: 735e2165d 99b4d649a
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Jun 13 13:23:27 2017 +0300

    [ci skip] Merge pull request #5150 from ytetsuro/add-oracle-rename-column-to-keyword
    
    Fix DBForge triggering ORA-00946 while renaming columns

commit 99b4d649a1d1d196d779277091c808f2bb77280f
Author: ytetsuro <phper.0o0@gmail.com>
Date:   Tue Jun 13 17:57:09 2017 +0900

    add rename to keyword

commit ee9d428171dc201f51eaffdb62616312915681ff
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Jun 5 10:44:37 2017 +0300

    [ci skip] Merge pull request #5143 from TysonAndre/misc-phpdoc-nits
    
    Fix misc inconsistencies between code and doc comments

commit 735e2165d1ad16454ae1b2222a66345a74b82d14
Merge: fdd4b816c dec2b56fa
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Jun 5 10:44:37 2017 +0300

    [ci skip] Merge pull request #5143 from TysonAndre/misc-phpdoc-nits
    
    Fix misc inconsistencies between code and doc comments

commit dec2b56fa44803e1579804fe329fd45658c6217b
Author: Tyson Andre <tysonandre775@hotmail.com>
Date:   Sun Jun 4 23:08:40 2017 -0700

    Fix misc type inconsistencies between code and doc comments

commit ab0010f543d88fa19506907684a9d329d4dd94e3
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu May 25 12:14:41 2017 +0300

    [ci skip] Fix #5131

commit 26ba694fb2aca751e8fa18e7c73f2c5e0c1c13ab
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu May 25 11:55:11 2017 +0300

    [ci skip] Doc changes following PR #5130

commit 904a28b41dab825eea4d1a9258aec2ea99b9a9d6
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu May 25 11:51:07 2017 +0300

    Merge pull request #5130 from aroche/patch-2
    
    Allow arbitrary strings as extra attributes in form_label

commit fdd4b816c8bb8c072e98a586b0b41786dd34d44c
Merge: 362c0a14a a785a4f2d
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu May 25 11:51:07 2017 +0300

    Merge pull request #5130 from aroche/patch-2
    
    Allow arbitrary strings as extra attributes in form_label

commit a785a4f2d1c8137ac82062d5b52cf7b6f575a72f
Author: aroche <aroche@users.noreply.github.com>
Date:   Wed May 24 15:30:05 2017 +0200

    fix bad attribute handling of form_label
    
    When passing a string for extra attributes in form_label helper function, these attributes were skipped.

commit 45f296f1872e7613a9dc1437046acae4eb8ed11d
Author: Lloric Mayuga Garcia <lloricode@users.noreply.github.com>
Date:   Sun May 21 21:21:57 2017 +0800

    add pre tag in config and session when array

commit c9054be8617adb9418e8edb732d6e234f7024e82
Author: Andrey Andreev <narf@devilix.net>
Date:   Wed May 10 11:36:31 2017 +0300

    Merge pull request #5112 from cerealbeer/develop
    
    read() in DB_cache fails when catching E_WARNING with custom error handler

commit 362c0a14a987d6462e4062a5fc34099446f9e14f
Merge: 79a50e61b 07ccf2cbd
Author: Andrey Andreev <narf@devilix.net>
Date:   Wed May 10 11:36:31 2017 +0300

    Merge pull request #5112 from cerealbeer/develop
    
    read() in DB_cache fails when catching E_WARNING with custom error handler

commit 07ccf2cbd2d8d09c094337f43feb3c3da91cbb6f
Author: Giuseppe Marcelli <giuseppem+bitbucket@gmail.com>
Date:   Wed May 10 10:32:09 2017 +0200

    Removing the error suppression op from the file_get_contents() call.

commit 0dbf6d3d501a5afcd1aa063c2eb0262df93c8fc6
Author: Giuseppe Marcelli <giuseppem+bitbucket@gmail.com>
Date:   Wed May 10 10:29:24 2017 +0200

    Revert "Commit 4763c13c99eab2a720a4d6d913902e5cef4e76ec does not allow anymore to use the custom result object against cached database results, fixing this, for more info see issue 4665,1351"
    
    This reverts commit 8233b1d6fc56347195b3a0411806e197e2e59ad3.

commit 8233b1d6fc56347195b3a0411806e197e2e59ad3
Author: Giuseppe Marcelli <giuseppem+bitbucket@gmail.com>
Date:   Wed May 10 02:12:31 2017 +0200

    Commit 4763c13c99eab2a720a4d6d913902e5cef4e76ec does not allow anymore to use the custom result object against cached database results, fixing this, for more info see issue 4665,1351

commit 3bb650404199a3cf3ae427a42086c4f6e79a86c1
Author: Giuseppe Marcelli <giuseppem+bitbucket@gmail.com>
Date:   Tue May 9 23:30:14 2017 +0200

    read() in DB_cache does not fail when catching E_WARNING with custom error handler

commit e6682fc34782ccf4fc6da0409448639942f8a222
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue May 9 09:46:40 2017 +0300

    [ci skip] Add changelog entry for PR #5108

commit 8a0f4408da8d614a5e467d9d219f349a6ba75428
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue May 9 09:40:49 2017 +0300

    Merge pull request #5108 from ft23/patch-1
    
    quizzes singular doesn't work

commit 79a50e61b3257eea757ead7e1951fd463faea495
Merge: c06bc67d6 583e9a073
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue May 9 09:40:49 2017 +0300

    Merge pull request #5108 from ft23/patch-1
    
    quizzes singular doesn't work

commit 583e9a073c3c91b6938644a1eaf5393466047cdf
Author: Fatih Turan <phpapp@hotmail.com>
Date:   Sat May 6 18:42:07 2017 +0300

    quizzes singular is doesnt work.

commit f8fba7bac1c69e619f504f9960133d9b0fecc34b
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Apr 18 12:03:15 2017 +0300

    [ci skip] Reduce nesting levels in CI_Output

commit c94b244671309f0a993fba205307b51f514242d4
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Apr 18 10:53:45 2017 +0300

    [ci skip] Add changelog entry for #5084, PR #5085

commit 11d59d7097ce35ab3b9845de2e021f9db1e25863
Author: Instructor, Computer Systems Technology <jim_parry@bcit.ca>
Date:   Sat Apr 15 13:35:10 2017 -0700

    Merge pull request #5085 from jim-parry/fix/xmlrpc
    
    Fix typo in serializeval()

commit c06bc67d6c4059b3d1050221d5b1624ac4e2f1f8
Merge: a706fbfa6 ab155307e
Author: Instructor, Computer Systems Technology <jim_parry@bcit.ca>
Date:   Sat Apr 15 13:35:10 2017 -0700

    Merge pull request #5085 from jim-parry/fix/xmlrpc
    
    Fix typo in serializeval()

commit ab155307e4f2a38cb3c82641500dad8f9ceaaa0a
Author: Master Yoda <jim_parry@bcit.ca>
Date:   Mon Apr 10 08:56:38 2017 -0700

    Fix typo in serializeval()
    Signed-off-by:Master Yoda <jim_parry@bcit.ca>

commit b9e45e32d89f2cba80f88becb0d52c92898e3a1d
Author: Andrey Andreev <narf@devilix.net>
Date:   Thu Apr 6 14:36:19 2017 +0300

    [ci skip] Simplify some internal CI_Email code

commit bdcafdfa204b041493707caa277915e00a124eaf
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Mar 28 17:31:09 2017 +0300

    [ci skip] Fix 5070

commit a706fbfa6be39b864730f666471ad68cfd90a951
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Mar 28 13:29:08 2017 +0300

    [ci skip] Add changelog entry for PR #5067

commit 87c81b078a322b4cb028fb7cb86b22453bf1823c
Merge: c7c0bdf4f af3484600
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Mar 28 13:27:42 2017 +0300

    Merge pull request #5067 from gxgpet/develop
    
    New Cache method: get_loaded_driver()

commit af3484600b2cbfddf8cedebbc87ae388e2b2c721
Author: George Petculescu <gxgpet@users.noreply.github.com>
Date:   Tue Mar 28 13:11:29 2017 +0300

    Updated Caching docs according to review

commit 6c5228b336f4d5aed5d0572af9af81f754fd0c59
Author: George Petculescu <gxgpet@gmail.com>
Date:   Sun Mar 26 14:38:55 2017 +0300

    Added method separator as comment.

commit 1fcee7b2aeeefca2c12529eeefd638ee48861908
Author: George Petculescu <gxgpet@gmail.com>
Date:   Sun Mar 26 14:30:21 2017 +0300

    Added get_loaded_driver() method to Cache.php; updated docs.

commit c7c0bdf4f7af7c4e71b073ee87ddb792087bdfac
Merge: 1d9aaee34 0eb38af2e
Author: Andrey Andreev <narf@devilix.net>
Date:   Fri Mar 24 11:04:53 2017 +0200

    Merge branch '3.1-stable' into develop
    
    Conflicts resolved:
            system/core/CodeIgniter.php
            system/core/Common.php
            system/core/Input.php
            system/helpers/cookie_helper.php
            tests/codeigniter/helpers/html_helper_test.php
            user_guide_src/source/changelog.rst
            user_guide_src/source/conf.py
            user_guide_src/source/installation/downloads.rst
            user_guide_src/source/installation/upgrading.rst
            user_guide_src/source/libraries/input.rst

commit 0eb38af2eaf1127b9b82261b7ec3bf4d4b847318
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Mar 20 19:38:59 2017 +0200

    [ci skip] Fix 3.1.4 release date ...
    
    Apparently, I'm from the future.

commit f83d10b375bd028480a47ec3c0bbb2b07dcabfee
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Mar 20 17:55:38 2017 +0200

    [ci skip] Mark the start of 3.1.5-dev

commit f58643bab5e5a868aabdaa64668cdb67a9b82fbb
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Mar 20 17:46:23 2017 +0200

    [ci skip] Prepare 3.1.4 release

commit df33ec2e45356895c5aec0a1ebfc325c2af4f74a
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Mar 20 17:43:58 2017 +0200

    Fix Apache header injection vulnerability in set_status_header()

commit 62b655b92667f1e417a4f260a34ff447ddeee2c2
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Mar 20 09:14:14 2017 +0200

    Fix #5057

commit ea0735264dfebd64858933e03a3b33323b14178e
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Mar 14 18:42:12 2017 +0200

    Fix #5050

commit e9d68ab58f01e15bb344a015fcce8444ea8cc247
Author: Andrey Andreev <narf@devilix.net>
Date:   Wed Mar 8 11:56:09 2017 +0200

    [ci skip] Remove an obsolete note from routing docs

commit 356bc66ebcd6a4d48c28fd119233e9d0bb12375f
Author: Andrey Andreev <narf@devilix.net>
Date:   Mon Mar 6 14:39:28 2017 +0200

    Fix #5044; add unit tests for img() HTML helper

commit 618870f9f70148944599c1db64babec09e7424bc
Author: Andrey Andreev <narf@devilix.net>
Date:   Wed Mar 1 14:09:26 2017 +0200

    [ci skip] Remove a misleading comment from the docblock for random_string()

commit 1d9aaee34ea77fdb68d79d7add37f26dd2649c00
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Feb 21 11:53:46 2017 +0200

    [ci skip] Changelog, docs changes following PR #5025

commit 157db44a550b194039b1f3c3a70dc259e8f57d5f
Merge: 1f73ffeb5 1a66dd27a
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Feb 21 11:49:02 2017 +0200

    Merge pull request #5025 from katsew/introduce-apcu-driver
    
    Add APCu driver to CI_Cache

commit 1f73ffeb551a17563ae238ee90de380a9384b880
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Feb 21 11:44:42 2017 +0200

    [ci skip] Reduce excessive indentation in QB group_by(), having() tests

commit cf6a44c7266ec813e56a9bb002179f8c599e5a92
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Feb 21 11:42:48 2017 +0200

    [ci skip] Add changelog entry for PR #5017

commit d785553f9a4f92bba3e3fe8c44ccc8d52d5d8f15
Merge: 9bfa0cbcc 3e0ad435f
Author: Andrey Andreev <narf@devilix.net>
Date:   Tue Feb 21 11:39:45 2017 +0200

    Merge pull request #5017 from tianhe1986/develop_having_in
    
    DB_query_builder: Adding having_in(), or_having_in(), having_not_in() and or_having_not_in()

commit 3e0ad435f13179ed1c590bdeba2fbeeaa7d0f9c2
Author: tianhe1986 <w1s2j3229@163.com>
Date:   Tue Feb 21 09:38:08 2017 +0800

    Use less indentation.
    
    Signed-off-by: tianhe1986 <w1s2j3229@163.com>

commit 1a66dd27a332797a5b11c0b8e90a579338d64268
Author: katsew <y.katsew@gmail.com>
Date:   Mon F