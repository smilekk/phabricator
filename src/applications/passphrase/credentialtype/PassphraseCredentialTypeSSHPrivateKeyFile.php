<?php

final class PassphraseCredentialTypeSSHPrivateKeyFile
  extends PassphraseCredentialTypeSSHPrivateKey {

  public function getCredentialType() {
    return 'ssh-key-file';
  }

  public function getCredentialTypeName() {
    return pht('SSH Private Key File');
  }

  public function getCredentialTypeDescription() {
    return pht('Store the path on disk to an SSH private key.');
  }

  public function getSecretLabel() {
    return pht('Path On Disk');
  }

  public function newSecretControl() {
    return new AphrontFormTextControl();
  }

}
