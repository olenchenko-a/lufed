# Changelog

**Note:** Breaking changes are marked with !!!

| Version     | Release Date | Description |
|------------ |--------------|-------------|
| 8.0.2       | 2020-02-22   | Bugfix: Typehints in 8.x prevents plugins from inserting into pages with an exception                                 |
|             |              | Bugfix: Update some sql queries with changed fieldnames in powermail 8                                                |
| 8.0.1       | 2020-02-19   | Bugfix: Small fix in ext_tables.sql for new fieldnames                                                                |
| 8.0.0 (!!!) | 2020-02-17   | Please use the TYPO3 upgrade wizard for an update to powermail 8.x!                                                   |
|             |              | Task: Support for TYPO3 10 (and only for this version)                                                                |
|             |              | Task: Add typehints for all functions                                                                                 |
|             |              | Task: Remove outdated functions                                                                                       |
|             |              | Task: Update notations for validators, lazy loading, etc...                                                           |
|             |              | Task: Replace old conditions with new symfony conditions                                                              |
|             |              | Task: Use TSFE for all functions that listen to GET/POST now to support routing                                       |
|             |              | Task: Replace old extbase commandcontrollers with symfony commands                                                    |
|             |              | Task: Rename _field.pages to .page and _page.forms to .form and add an upgrade wizard for this                        |
|             |              | Task: _mail.sys_language_uid is now forced to -1 (also for _answer) and add an upgrade wizard for this                |
|             |              | Task: Change documentation from RST to markdown                                                                       |
|             |              | Task: Update automatic tests                                                                                          |
|             |              | Task: Code cleanup                                                                                                    |
| 7.4.0       | 2019-08-27   | Feature: Allow aborting of the email sending process via signal                                                       |
|             |              | Feature: Add a new signal optinConfirmActionAfterPersist                                                              |
|             |              | Feature: Use new documentation rendering                                                                              |
|             |              | Bugfix: Spamcheck fix while searching for links in answers with non-string values                                     |
|             |              | Bugfix: Fix double opt-in with an upload field                                                                        |
|             |              | Task: Change German wording for optin mails                                                                           |
|             |              | Task: Small cleanups                                                                                                  |
|             |              | Task: Update documentation                                                                                            |
| 7.3.1       | 2019-05-21   | Bugfix: Fix table fields for marketing information for mysql strict mode                                              |
|             |              | Bugfix: Ensure to render a-tags as absolute links in mails                                                            |
| 7.3.0       | 2019-04-09   | Task: Some small cleanup                                                                                              |
|             |              | Feature: Support the usage in helhum/typo3-secure-web (Captcha, Export and Extension Icon)                            |
|             |              | Feature: Pass $this->settings to initializeObjectSettings Signal for a manipulation of settings via SignalSlot        |
|             |              | Bugfix: Prevent exception in Pi2 in TYPO3 9.5 LTS                                                                     |
|             |              | Bugfix: Allow backend module usage together with EXT:securedownloads                                                  |
| 7.2.0       | 2019-02-18   | Task: Small code cleanup                                                                                              |
|             |              | Feature: Add a transient property to mail model                                                                       |
|             |              | Bugfix: Prevent type hint exception in PrefillFieldViewHelper                                                         |
|             |              | Bugfix: Fix a typo in a css class for a loading bar (AJAX submit)                                                     |
|             |              | Bugfix: Fixed a small typo                                                                                            |
| 7.1.0 (!!!) | 2019-01-12   | Task: Unit test update                                                                                                |
|             |              | Task: Remove deprecated keys in ext_emconf.php                                                                        |
|             |              | !!! Bugfix: Make JavaScript work again in BE-Module in TYPO3 9.5 - Path of all JavaScript files changes from Resources/Public/JavaScripts/ to Resources/Public/JavaScript/ - maybe you have to adjust your TypoScript |
|             |              | Bugfix: Allow default values directly in PrefillFieldViewHelper                                                       |
|             |              | No mails are sent if database storing was disabled with the disclaimer feature                                        |
|             |              | Remove outdated eID inclusion                                                                                         |
|             |              | Show only allowed froms in plugin (in TYPO3 9.5)                                                                      |
| 7.0.0 (!!!) | 2019-01-12   | Feature: Add a disclaimer link functionality to sender- and optinmail (sender can remove his own mail completely from database now) |
|             |              | Task: Increase general hash length from 10 to 64 characters (optin links and new disclaimer links)                    |
|             |              | Task: ome cleanup                                                                                                     |
|             |              | Bugfix: Reanimate location field (broken because of change in the google API). Now we're using openstreetmap for this |
