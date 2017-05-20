<?php

    $destinataire = $_GET['mail'];
    $sujet = "Activation de votre compte" ;
    $entete = "From: noreply@informaix.com\n" ;
    $entete .= "Content-Type: text/html; charset=\"utf-8\"";
    $message = '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Informaix | Contact</title>
	</head>
	<body style="margin: 0; padding: 0;">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td>
					<!-- Header Top Start -->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
						<tr>
							<td>
								<table align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse: collapse;">
									<tr>
										<td align="left"  bgcolor="#2e3537">
											<!-- Space -->
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
											</table>
											<table align="center">
												<tr>
													<td width="22">
														<img src="http://tristandietz.alwaysdata.net/informaix/mail/marker-icon-white.png" alt="location" />
													</td>
													<td style="color: #fff; font-size: 12px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">BDE Inform\'Aix</td>
													<td width="22"></td>
													<td width="22">
														<img src="http://tristandietz.alwaysdata.net/informaix/mail/mail-icon-white.png" alt="location" />
													</td>
													<td>
														<a style="color: #fff; font-size: 12px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif; text-decoration:none;" href="mailto:contact@informaix.com">contact@informaix.com</a>
													</td>
												</tr>
											</table>
											<!-- Space -->
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<!-- Header Top End -->

					<!-- Logo Start -->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
						<tr>
							<td>
								<table bgcolor="#fafafa" align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse: collapse;">
									<tr>
										<td>
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<tr>
													<td align="center" bgcolor="#ffffff" >
														<a href="#">
															<img src="http://informaix.com/LOGO_OFFICIEL_INFORMAIX.png" width="300" alt="Section one image" style="display: block;"/>
														</a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<!-- Logo End -->

					<!-- BDE Informaix Start -->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
						<tr>
							<td>
								<table bgcolor="#fafafa" align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse: collapse;">
									<!-- Space -->
									<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
									<tr>
										<td width="100%" align="center" style="font-size: 28px; line-height: 34px; font-family:helvetica, Arial, sans-serif; color:#343434;">
											<strong>Inform\'Aix</strong>, c\'est...
										</td>
									</tr>
									<!-- Space -->
									<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
								</table>
								<!-- First Row -->
								<table bgcolor="#fafafa" align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse: collapse;">
									<tr>
										<td>
											<!-- first column -->
											<table align="left" bgcolor="#fafafa" border="0" cellpadding="0" cellspacing="0" width="290" style="border-collapse: collapse;">
												<tr>
													<td>
														<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
															<tr>
																<td align="center">
																	<a href="#">
																		<img src="http://tristandietz.alwaysdata.net/informaix/mail/the_battle.png" width="60" alt="Feature" style="display: block;"/>
																	</a>
																</td>
															</tr>
														</table>
														<table width="250" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
															<tr>
																<td align="center">
																	<a href="#" style="font-family: helvetica, Arial, sans-serif; font-size: 22px; color: #333333; line-height: 24px; text-decoration: none;">Des news régulières</a>
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="15">&nbsp;</td></tr>
															<tr>
																<td style="font-family: helvetica, Arial, sans-serif; font-size: 14px; color: #777777; line-height: 21px; text-align: center;">
																	L\'actualité de vos soirées, des conseils pratiques, tout pour réussir votre année.
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
															<tr>
																<td>
																	<table width="100" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
																		<tr>
																			<td align="center">
																				<a href="http://fuinagianni.alwaysdata.net/informaix/" style="color: #3697d9; font-size: 15px; line-height: 15px; font-weight: normal; text-decoration: none; font-family: helvetica, Arial, sans-serif;">En savoir plus</a>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- second column -->
											<table align="left" bgcolor="#fafafa" border="0" cellpadding="0" cellspacing="0" width="290" style="border-collapse: collapse;">
												<tr>
													<td>
														<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
															<tr>
																<td align="center">
																	<a href="#">
																		<img src="http://tristandietz.alwaysdata.net/informaix/mail/planning.png" width="60" alt="Feature" style="display: block;"/>
																	</a>
																</td>
															</tr>
														</table>
														<table width="250" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
															<tr>
																<td align="center">
																	<a href="#" style="font-family: helvetica, Arial, sans-serif; font-size: 22px; color: #333333; line-height: 24px; text-decoration: none;">Votre planning en temps réel</a>
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="15">&nbsp;</td></tr>
															<tr>
																<td style="font-family: helvetica, Arial, sans-serif; font-size: 14px; color: #777777; line-height: 21px; text-align: center;">
    Suivez vos cours en temps réel grâce à notre application web.
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
															<tr>
																<td>
																	<table width="100" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
																		<tr>
																			<td align="center">
																				<a href="http://fuinagianni.alwaysdata.net/informaix/planning.php" style="color: #3697d9; font-size: 15px; line-height: 15px; font-weight: normal; text-decoration: none; font-family: helvetica, Arial, sans-serif;">En savoir plus</a>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- Second Row -->
								<table bgcolor="#fafafa" align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse: collapse;">
									<tr>
										<td>
											<!-- first column -->
											<table align="left" bgcolor="#fafafa" border="0" cellpadding="0" cellspacing="0" width="290" style="border-collapse: collapse;">
												<tr>
													<td>
														<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
															<tr>
																<td align="center">
																	<a href="#">
																		<img src="http://tristandietz.alwaysdata.net/informaix/mail/chat.png" width="60" alt="Feature" style="display: block;"/>
																	</a>
																</td>
															</tr>
														</table>
														<table width="250" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
															<tr>
																<td align="center">
																	<a href="#" style="font-family: helvetica, Arial, sans-serif; font-size: 22px; color: #333333; line-height: 24px; text-decoration: none;">Un chat en ligne</a>
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="15">&nbsp;</td></tr>
															<tr>
																<td style="font-family: helvetica, Arial, sans-serif; font-size: 14px; color: #777777; line-height: 21px; text-align: center;">
    Discutez avec les autres élèves pour faire circuler des informations, pour demander de l\'aide ou répondre à une question.
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
															<tr>
																<td>
																	<table width="100" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
																		<tr>
																			<td align="center">
																				<a href="http://fuinagianni.alwaysdata.net/informaix/minichat/chat.php" style="color: #3697d9; font-size: 15px; line-height: 15px; font-weight: normal; text-decoration: none; font-family: helvetica, Arial, sans-serif;">En savoir plus</a>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="40">&nbsp;</td></tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- second column -->
											<table align="left" bgcolor="#fafafa" border="0" cellpadding="0" cellspacing="0" width="290" style="border-collapse: collapse;">
												<tr>
													<td>
														<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
															<tr>
																<td align="center">
																	<a href="#">
																		<img src="http://tristandietz.alwaysdata.net/informaix/mail/the_battle.png" width="60" alt="Feature" style="display: block;"/>
																	</a>
																</td>
															</tr>
														</table>
														<table width="250" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
															<tr>
																<td align="center">
																	<a href="#" style="font-family: helvetica, Arial, sans-serif; font-size: 22px; color: #333333; line-height: 24px; text-decoration: none;">La Battle</a>
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="15">&nbsp;</td></tr>
															<tr>
																<td style="font-family: helvetica, Arial, sans-serif; font-size: 14px; color: #777777; line-height: 21px; text-align: center;">
																	Affrontez les autres groupes tout au long de l\'année avec Inform\'Aix et vos enseignants.
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
															<tr>
																<td>
																	<table width="100" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
																		<tr>
																			<td align="center">
																				<a href="http://fuinagianni.alwaysdata.net/informaix/battles.php" style="color: #3697d9; font-size: 15px; line-height: 15px; font-weight: normal; text-decoration: none; font-family: helvetica, Arial, sans-serif;">En savoir plus</a>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="40">&nbsp;</td></tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<!-- Border -->
									<tr><td bgcolor="#f5f5f5" style="font-size: 0; line-height: 0;" height="1">&nbsp;</td></tr>
								</table>
							</td>
						</tr>
					</table>
					<!-- BDE Informaix End -->

					<!-- Validation compte Start -->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
						<tr>
							<td>
								<table align="center" bgcolor="#54ACD2" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse: collapse;">
									<tr>
										<td>
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<!-- Border -->
												<tr><td bgcolor="#3697d9" style="font-size: 0; line-height: 0;" height="1">&nbsp;</td></tr>
												<!-- Space -->
												<tr><td style="font-size: 0; line-height: 0;" height="30">&nbsp;</td></tr>
											</table>
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<tr>
													<td>
														<table align="left" border="0" cellpadding="0" cellspacing="0" width="400" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="3">&nbsp;</td></tr>
															<tr>
																<td width="100%" align="center" style="font-size: 28px; line-height: 34px; font-family:helvetica, Arial, sans-serif; color:#ffffff;">
																	Validez votre compte
																</td>
															</tr>
														</table>
														<table align="left" border="0" cellpadding="0" cellspacing="0" width="140" style="border-collapse: collapse;">
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="0">&nbsp;</td></tr>
															<tr>
																<td width="100%" align="center" style="padding:12px 12px 12px 12px; text-align: center;border-radius:4px;" bgcolor="#f1f1f1">
																	<a href="http://fuinagianni.alwaysdata.net/informaix/membres/validation.php?log='.urlencode($_GET['log']).'&cle='.urlencode($_GET['cle']).'" style="color: #000000; font-size: 16px; font-weight: normal; text-decoration: none; font-family: helvetica, Arial, sans-serif;">Confirmer</a>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<!-- Space -->
												<tr><td style="font-size: 0; line-height: 0;" height="30">&nbsp;</td></tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>

					</table>
					<!-- Vaidation compte End -->

					<!-- Footer Start -->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
						<tr>
							<td>
								<table bgcolor="#f5f5f5" align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse: collapse;">
									<tr>
										<td>
											<!-- Space -->
											<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
												<tr><td style="font-size: 0; line-height: 0;" bgcolor="#eaeaea" height="1">&nbsp;</td></tr>
												<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
											</table>
											<table align="center" border="0" cellpadding="0" cellspacing="0" width="540" style="border-collapse: collapse;">
												<tr>
													<td align="center" style="color: #999999; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">
														Copyright © 2016 - 2017 Inform\'Aix par <a href="http://tristandietz.alwaysdata.net" style="color: #3697d9; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif; text-decoration:none;">Tristan Dietz</a>. Tous droits réservés / <a href="#" style="color: #3697d9; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif; text-decoration:none;"> Conditions Générales d\'Utilisation</a>
													</td>
												</tr>
											</table>
											<!-- Space -->
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>

					</table>
					<!-- Footer End -->


				</td>
			</tr>
		</table>
	</body>
</html>';

    mail($destinataire, $sujet, $message, $entete) ;

?>